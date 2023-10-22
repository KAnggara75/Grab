<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrabController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Data From User
        $hh = $request->hh;
        $trip = $request->trip;
        $ddmm = $request->ddmm;
        $isCar = $request->isCar;
        $discount = $request->discount > 1000 ? $request->discount : 0;
        $isDiscount = $request->discount > 1000 ? true : false;

        // bill
        $bill = $request->price;
        $fee = $isCar ? 5000 : 2000;

        // format bill
        $nominal = number_format($bill + $fee - $discount, 0, "", ".");
        $fee = number_format($fee, 0, "", ".");
        $bill = number_format($bill, 0, "", ".");
        $discount = number_format($discount, 0, "", ".");

        // Trip Time Config
        $userTime = (($hh <= 12) ? $hh : ($hh - 12));
        $tripMax = $trip != 'C' ? 15 : 45;
        $timePrefix = $hh <= 12 ? 'AM' : 'PM';
        $time = fake()->numberBetween(9, $tripMax);
        $randomTime = fake()->numberBetween(10, 59);
        $pickupTime = $userTime . ':' . $randomTime;
        $min = $time + $randomTime;
        $dropOffTime = (($min > 59) ? $userTime + 1 : $userTime) . ':' . (($min % 60) < 10 ? '0' : '') . ($min % 60);

        // set trip date
        $day = $ddmm == null ? fake()->numberBetween(1, 30) : substr($ddmm, 0, 2);
        $month = $ddmm == null ? fake()->numberBetween(1, 12)  : substr($ddmm, 2, 2);
        $date = date('j F Y', mktime(0, 0, 0, $month, $day));

        // kost to station
        $pickupA = ['Nasi Goreng Favorite G2 - Lengkong Gudang'];
        $dropOffA = ['Stasiun Rawa Buntu'];
        // station to office
        $pickupB = ['Grab Pickup Point Stasiun Palmerah Arah Senayan', 'Near RM Duwa Putra - Stasiun Palmerah', 'Jalan Tentara Pelajar', 'Pintu Arah Kebayoran Lama Halte Busway Stasiun Palmerah'];
        $dropOffB = ['Menara DEA Tower'];
        // office to station
        $pickupC = ['Menara DEA Tower'];
        $dropOffC = ['Stasiun Palmerah'];
        // station to kost
        $pickupD = ['Halte Rawa Buntu 1 Stasiun Rawa Buntu'];
        $dropOffD = ['Nasi Goreng Favorite G2 - Lengkong Gudang'];

        // generate route
        $pickup = '';
        $dropOff = '';
        $distance = 512 / 100;

        if ($trip == 'A') {
            $distance = fake()->numberBetween(360, 410) / 100;
            $pickup = fake()->randomElement($pickupA);
            $dropOff = fake()->randomElement($dropOffA);
        } elseif ($trip == 'B') {
            $distance = fake()->numberBetween(541, 580) / 100;
            $pickup = fake()->randomElement($pickupB);
            $dropOff = fake()->randomElement($dropOffB);
        } elseif ($trip == 'C') {
            $distance = fake()->numberBetween(541, 580) / 100;
            $pickup = fake()->randomElement($pickupC);
            $dropOff = fake()->randomElement($dropOffC);
        } elseif ($trip == 'D') {
            $distance = fake()->numberBetween(360, 410) / 100;
            $pickup = fake()->randomElement($pickupD);
            $dropOff = fake()->randomElement($dropOffD);
        }

        // Review
        $ran = fake()->numberBetween(1, 5);
        $reviewList = [
            'Layanan Mantap',
            'Bersih & Nyaman',
            'Pengemudi yang Suka Membantu',
            'Tahu Jalan Banget',
            'Ngobrolnya Seru'
        ];
        $review = $reviewList[$ran - 1];
        $icon = 'img/icon' . $ran . '.png';

        // generate driver name
        $name = explode(" ", fake()->name('male'));
        $driver = $name[0] . " " . $name[1];

        // Addtional info
        $rating = number_format(fake()->numberBetween(46, 50) / 10, 1, ".", ".");
        $booking_code = $this->createSN(time(), $day);

        return view('welcome', [
            'fee' => $fee,
            'icon' => $icon,
            'bill' => $bill,
            'date' => $date,
            'time' => $time,
            'timePrefix' => $timePrefix,
            'driver' => $driver,
            'review' => $review,
            'rating' => $rating,
            'pickup' => $pickup,
            'nominal' => $nominal,
            'dropoff' => $dropOff,
            'discount' => $discount,
            'distance' => $distance,
            'isDiscount' => $isDiscount,
            'pickuptime' => $pickupTime,
            'dropofftime' => $dropOffTime,
            'booking_code' => $booking_code,
        ]);
    }

    public function createSN($epoch = 0, $day = 0)
    {
        $data = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $epoch = $epoch == 0 ? time() : $epoch;
        $random = fake()->numberBetween(2, 999);
        $epoch = $epoch * $random;
        $e0 = 5;
        $e1 = $data[(($day / 7) + 9)];
        $e2 = $data[(substr($epoch, 3, 2) % 36)];
        $e3 = $data[(substr($epoch, 4, 2) % 36)];
        $e4 = $data[(substr($epoch, 5, 2) % 36)];
        $e5 = $data[(substr($epoch, 6, 2) % 36)];
        $e6 = $data[(substr($epoch, 7, 2) % 36)];
        $e7 = $data[(substr($epoch, 8, 2) % 36)];
        $e8 = $data[(substr($epoch, 9, 2) % 36)];
        $e9 = fake()->randomElement($data);
        $e10 = fake()->randomElement($data);
        $e11 = fake()->randomElement($data);
        $result = $e0 . $e1 . $e2 . $e3 . $e4 . $e5 . $e6 . $e7 . $e8 . $e9 . $e10 . $e11;
        return $result;
    }
}
