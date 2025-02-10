<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use App\Mail\BookTableMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookTableController extends Controller
{


    public function BookTableStore(Request $request)
    {
        $TableData = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'date' => $request->date,
            'time_slot' => $request->time_slot,
            'guest' => $request->guest,
            'message' => $request->message
        ];

        // Send email to admin
        Mail::to('robi.cnits@gmail.com')->send(new BookTableMail($TableData));

        // Send email to the user
        Mail::to($request->email)->send(new BookTableMail($TableData));

        // Store booking details in the database
        BookTable::create($TableData);

        return redirect('/consgratulation-message');
    }



}


// Form-Post-Changes:

// 1.  Baby Care Form -> compelete(Localhost Id 4) -> DB-Sub-CategoryId -> 24
// 2.  Artists form ->id-> 3 compelete Delete----------------------------------
// 3.  Classes Form -> compelete (Localhost Id 282) -> DB-Sub-CategoryId -> 290
// 4.  General Form  -> compelete (bottom)  (Localhost Id 7) -> DB-Sub-CategoryId -> 366
// 5.  Events & Fun Form -> 2 ->  compelete Delete----------------------------------
// 6.  Gaming Form -> compelete Delete----------------------------------
// 7.  Domestic Animals Form -> id -> 69->  compelete -> Delete---------------------------------------------------
// 8.  Apartments  Accommodation For Sale Form -> compelete
// 9.  House For Sale Form -> compelete
// 10. Workout / Groups  Form ->( id => 193 ) ->Compelete
// 11. Missing & Found Form -> (id => 10) -> Compelete
// 12. Crafting / Gaming  Form -> Compelete
// 13. Networking Form -> Compelete
// 14. News form -> id-> 9 ->  Compelete -> Delete----------------------------------
// 15. Singers & Musicians Form -> id -> 13 Compelete -> Delete----------------------------------
// 16. Environment activities Form -> id -> 191 Compelete -> Delete---------------------------------------------------
// 17. Community assistance Form  -> Compelete
// 18. Car sharing Form -> id -> 17 Compelete Delete---------------------------------------------------

// New-Form-Post-Changes:

// 19. Art Form -> Compelete  (Localhost Id 68) -> DB-Sub-CategoryId -> 196
// 20. Babysitters / Caregivers Form  -> id -> 201->  Compelete -> Delete---------------------------------------------------
// 21. Cellphone Mobile Devices Form -> Compelete
// 22. Domestic Animals Form  -> Compelete
// 23. Home services Form   -> Compelete (Localhost Id 80) -> DB-Sub-CategoryId -> 439
// 24. Labour / Manual Work Form   -> Compelete   (Localhost Id 62) -> DB-Sub-CategoryId -> 463
// 25. Landscaping Form    -> Compelete
// 26. Cleaning / Garbage Disposal / Disinfection-> id -> 204  Form  -> Compelete Delete---------------------------------------------------
// 27. Law Advocacy Form  -> id -> 64 Compelete  Delete---------------------------------------------------
// 28. Technical / Repair Form   -> id -> 205->  Compelete Delete---------------------------------------------------
// 29. Technology / Software Form  -> id -> 67->  Compelete-> Delete---------------------------------------------------
// 30. Gatherings / Events Form  -> id -> 72 Compelete-> Delete---------------------------------------------------
// 31. Local Promotions Form  -> Compelete
// 32. Finance / Accounting / Investments -> Compelete
// 33. Construction / Handyman Form  -> id -> 207 Compelete  Delete---------------------------------------------------
// 34. Food delivery Form -> Complete  (Localhost Id 206) -> DB-Sub-CategoryId -> 448
// 35. Biking Form -> Complete
// 36. Professional service Form  -> Complete -> (Localhost Id 73) -> DB-Sub-CategoryId -> 454
// 37. Property / Housing Form -> id -> 71-> Complete  Delete---------------------------------------------------
// 38. Tourism  Form -> Complete
// 40. Cosmetics / Skincare Form -> id -> 63 ->  Complete  Delete---------------------------------------------------
// 41. Education / Training  Form -> Complete
// 42. Healthcare / Welness Form  -> id -> 79 Complete  Delete---------------------------------------------------
// 43. Vehicles Form -> Complete -> id -> 61 -> Delete---------------------------------------------------
// 44. Translation / Writing Form -> id -> 202 ->  Complete -> Delete---------------------------------------------------
// 45. Components Form -> Complete

// Freelance work Form-Post-Changes:

// 46. Art Form freelance work -> Complete
// 47. Beauty Fitness Sport Form -> Complete
// 48. Digital marketing Form -> Complete
// 49. Events Form  -> Complete
// 50. Management HR manager Form -> id -> 223 -> Complete Delete---------------------------------------------------

// 51. Agriculture Form Services category (Localhost Id 75) -> DB-Sub-CategoryId -> 446
// 52. Art & Craft Supplies -> Complete
// 53. Animals / Birds Form -> Complete
// 54. Antiques Form -> Complete
// 55. Auto Parts Form -> Complete
// 56. Furniture -> compelete
// 57. Cameras & Photography Equipment -> compelete
// 58. Bikes Form -> compelete
// 59. Cars -> compelete
// 60. Construction Tools & Equipment -> compelete
// 61. Baby / Children Form -> compelete
// 62. Books Form  -> compelete
// 63. Business Form  -> compelete
// 64. Cars For Sale Form  -> compelete  Delete---------------------------------
// 65. Cars Trucks Form  -> compelete   Delete---------------------------------
// 66. Children's Car Seats  Form  -> compelete-> Delete---------------------------------
// 67. Computer Accessories  Form  -> compelete -> (Localhost Id-> 120) -> DB-Sub-CategoryId -> 248 ----------------------------- New ----------------------------------
// 68. Construction Tools Form   -> compelete  -> (Localhost Id-> 275) -> DB-Sub-CategoryId -> 110 ----------------------------- New ----------------------------------
// 69. Cosmetics / Beauty Form   -> compelete
// 70. Dishes / Kitchen Utensils Form   -> compelete  -> (Localhost Id-> 19) -> DB-Sub-CategoryId -> 400 ----------------------------- New ----------------------------------

// 71. Equipment Form -> compelete
// 72. Fashion Form -> compelete -> (Localhost Id-> 114) -> DB-Sub-CategoryId -> 359 ----------------------------- New ----------------------------------
// 73. For the wedding Form -> compelete (Localhost Id-> 212) -> DB-Sub-CategoryId -> 119 ----------------------------- New ----------------------------------
// 74. Furniture Form -> compelete  (Localhost Id 231) -> DB-Sub-CategoryId -> 229 ----------------------------- New ----------------------------------
// 75. Garage Form -> compelete (Localhost Id-> 86) -> DB-Sub-CategoryId -> 180 ----------------------------- New ----------------------------------



