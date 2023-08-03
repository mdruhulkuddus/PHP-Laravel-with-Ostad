<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    public function getCustomers(Request $request): Collection
    {
        return Customer::where('user_id', $request->header('id'))->latest()->get();
    }

    public function addCustomer(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:customers,email',
                'image' => ['image', 'max:512', 'mimes:png,jpg', 'dimensions:between=100,150,100,150'],
            ]);
            if ($validator->fails()) {
                return response()->json(['status' => 'failed', 'message' => $validator->errors()], 200);
            }
            $imageUrl = null;
            //check request image file exists or not
            if ($request->file('image')) {
                $image = $request->file('image');
                $imageUrl = 'user_' . $request->header('id') . '_' . date('Y_m_d_H_i_s_a') . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/customer', $imageUrl);
            }
            //add new customer
            Customer::create([
                'user_id' => $request->header('id'),
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'image' => $imageUrl,
            ]);
            return response()->json(['status' => 'success', 'message' => 'Customer Created Successfully'], 200);

        } catch (\Throwable $th) {
            return response()->json(['status' => 'failed', 'message' => 'Something went wrong'], 500);
        }
    }

    public function singeCustomer(Request $request): ?Customer
    {
        return Customer::where(['id' => $request->id, 'user_id' => $request->header('id')])->first();
    }

    public function updateCustomer(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:customers,email,' . $request->id . ',id',
                'image' => ['image', 'max:512', 'mimes:png,jpg', 'dimensions:between=100,150,100,150'],
            ]);
            if ($validator->fails()) {
                return response()->json(['status' => 'failed', 'message' => $validator->errors()], 400);
            }
            $customer = Customer::where(['id' => $request->id, 'user_id' => $request->header('id')])->first();
            $imageUrl = $customer->image;
            //check request image file exists or not
            if ($request->hasFile('image')) {
                //delete existing image
                if ($imageUrl) {
                    if (Storage::fileExists('public/customer/' . $imageUrl)) {
                        Storage::delete('public/customer/' . $imageUrl);
                    }
                }

                //upload new image
                $image = $request->file('image');
                $imageUrl = 'user_' . $request->header('id') . '_' . date('Y_m_d_H_i_s_a') . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/customer', $imageUrl);
            }
            //customer updated
            $customer->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'image' => $imageUrl,
            ]);
            return response()->json(['status' => 'success', 'message' => 'Customer Updated Successfully'], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'failed', 'message' => 'Something went wrong'], 500);
        }
    }

    public function deleteCustomer(Request $request): JsonResponse
    {
        try {
            $customer = Customer::where(['id' => $request->id, 'user_id' => $request->header('id')])->first();
            //delete existing image
            if ($customer->image) {
                if (Storage::fileExists('public/customer/' . $customer->image)) {
                    Storage::delete('public/customer/' . $customer->image);
                }
            }
            //delete customer
            if ($customer->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Customer Deleted Successfully'], 200);
            }
            return response()->json(['status' => 'failed', 'message' => 'Customer Not Found'], 404);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'failed', 'message' => 'Something went wrong'], 500);
        }
    }

    public function customerPage(): View
    {
        return view('pages.customers.customers_list');
    }
}
