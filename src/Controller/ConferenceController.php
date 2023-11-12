<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="app_conference")
     */
    public function index($name): Response
    {

        return $this->render('conference/index.html.twig', [
            'name' => $name,
        ]);

        // return new Response (<<<EDF

        // <html>
        //     <body>
        //         $greet
        //         <img src="/images/website-under-construction.gif" />
        //     </body>
        // </html>

        // EDF
        // );
    }
}

//PATH PARAM URL /?SOMETHING=SOMETHING
//  /**
//      * @Route("/", name="app_conference")
//      */
//     public function index(Request $request): Response
//     {

//         $greet = '';

//         if($name = $request->query->get('hello')){
//             $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
//         };



//TEN INNY SPOSOB ZOBACZYC POZNIEJ
// /**
//      * @Route("/hello/{name}", name="app_conference")
//      */
//     public function index($name): Response
//     {

//         $greet = '';

//         if($name){
//             $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
//         };

//         // return $this->render('conference/index.html.twig', [
//         //     'controller_name' => 'ConferenceController',
//         // ]);

//         return new Response (<<<EDF

//         <html>
//             <body>
//                 $greet
//                 <img src="/images/website-under-construction.gif" />
//             </body>
//         </html>

//         EDF
//         );
//     }
// }

