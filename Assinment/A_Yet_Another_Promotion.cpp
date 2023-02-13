#include "bits/stdc++.h"
using namespace std;

int main()
{
    int t;
    cin >> t;
    while (t--)
    {
        long long int day1p, day2p, potato, promo, amount = 0;
        cin >> day1p >> day2p >> potato >> promo;
        if(potato < promo)
        {
            amount = potato *  min(day1p, day2p);
        }
        else
        { 
            long long int extraKilo = potato % (promo + 1);
            long long int Kilo = potato / (promo + 1);
            amount = extraKilo *  min(day1p, day2p) + Kilo * promo * day1p;
            //long long int amount3 = potato * day2p;
            
        }
        cout << amount << "\n";
    }

    return 0;
}
