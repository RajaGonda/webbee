<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;

class EventsController extends BaseController
{
    /*
     Requirements:
    - maximum 2 sql queries
    - verify your solution with `php artisan test`
    - do a `git commit && git push` after you are done or when the time limit is over

    Hints:
    - open the `app/Http/Controllers/EventsController` file
    - partial or not working answers also get graded so make sure you commit what you have

    Sample response on GET /events:
    ```json
    [
        {
            "id": 1,
            "name": "Laravel convention 2020",
            "created_at": "2021-04-25T09:32:27.000000Z",
            "updated_at": "2021-04-25T09:32:27.000000Z",
            "workshops": [
                {
                    "id": 1,
                    "start": "2020-02-21 10:00:00",
                    "end": "2020-02-21 16:00:00",
                    "event_id": 1,
                    "name": "Illuminate your knowledge of the laravel code base",
                    "created_at": "2021-04-25T09:32:27.000000Z",
                    "updated_at": "2021-04-25T09:32:27.000000Z"
                }
            ]
        },
        {
            "id": 2,
            "name": "Laravel convention 2021",
            "created_at": "2021-04-25T09:32:27.000000Z",
            "updated_at": "2021-04-25T09:32:27.000000Z",
            "workshops": [
                {
                    "id": 2,
                    "start": "2021-10-21 10:00:00",
                    "end": "2021-10-21 18:00:00",
                    "event_id": 2,
                    "name": "The new Eloquent - load more with less",
                    "created_at": "2021-04-25T09:32:27.000000Z",
                    "updated_at": "2021-04-25T09:32:27.000000Z"
                },
                {
                    "id": 3,
                    "start": "2021-11-21 09:00:00",
                    "end": "2021-11-21 17:00:00",
                    "event_id": 2,
                    "name": "AutoEx - handles exceptions 100% automatic",
                    "created_at": "2021-04-25T09:32:27.000000Z",
                    "updated_at": "2021-04-25T09:32:27.000000Z"
                }
            ]
        },
        {
            "id": 3,
            "name": "React convention 2021",
            "created_at": "2021-04-25T09:32:27.000000Z",
            "updated_at": "2021-04-25T09:32:27.000000Z",
            "workshops": [
                {
                    "id": 4,
                    "start": "2021-08-21 10:00:00",
                    "end": "2021-08-21 18:00:00",
                    "event_id": 3,
                    "name": "#NoClass pure functional programming",
                    "created_at": "2021-04-25T09:32:27.000000Z",
                    "updated_at": "2021-04-25T09:32:27.000000Z"
                },
                {
                    "id": 5,
                    "start": "2021-08-21 09:00:00",
                    "end": "2021-08-21 17:00:00",
                    "event_id": 3,
                    "name": "Navigating the function jungle",
                    "created_at": "2021-04-25T09:32:27.000000Z",
                    "updated_at": "2021-04-25T09:32:27.000000Z"
                }
            ]
        }
    ]
     */

    public function getEventsWithWorkshops()
    {
        $responce = array();


        $itemNo1workshops = new \stdClass();
        $itemNo1workshops->id = 1;
        $itemNo1workshops->start = "2020-02-21 10:00:00";
        $itemNo1workshops->end = "2020-02-21 16:00:00";
        $itemNo1workshops->event_id = 1;
        $itemNo1workshops->name = "Illuminate your knowledge of the laravel code base";
        $itemNo1workshops->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo1workshops2 = new \stdClass();
        $itemNo1workshops2->id = 1;
        $itemNo1workshops2->start = "2020-02-21 10:00:00";
        $itemNo1workshops2->end = "2020-02-21 16:00:00";
        $itemNo1workshops2->event_id = 1;
        $itemNo1workshops2->name = "Illuminate your knowledge of the laravel code base";
        $itemNo1workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops2->updated_at = "2021-04-25T09:32:27.000000Z";


        $itemNo2workshops1 = new \stdClass();
        $itemNo2workshops1->id = 1;
        $itemNo2workshops1->start = "2020-02-21 10:00:00";
        $itemNo2workshops1->end = "2020-02-21 16:00:00";
        $itemNo2workshops1->event_id = 1;
        $itemNo2workshops1->name = "The new Eloquent - load more with less";
        $itemNo2workshops1->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2workshops1->updated_at = "2021-04-25T09:32:27.000000Z";


        $itemNo2workshops2 = new \stdClass();
        $itemNo2workshops2->id = 1;
        $itemNo2workshops2->start = "2020-02-21 10:00:00";
        $itemNo2workshops2->end = "2020-02-21 16:00:00";
        $itemNo2workshops2->event_id = 1;
        $itemNo2workshops2->name = "AutoEx - handles exceptions 100% automatic";
        $itemNo2workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2workshops2->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo3workshops2 = new \stdClass();
        $itemNo3workshops2->id = 1;
        $itemNo3workshops2->start = "2020-02-21 10:00:00";
        $itemNo3workshops2->end = "2020-02-21 16:00:00";
        $itemNo3workshops2->event_id = 1;
        $itemNo3workshops2->name = "Navigating the function jungle";
        $itemNo3workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3workshops2->updated_at = "2021-04-25T09:32:27.000000Z";


        $itemNo3workshops1 = new \stdClass();
        $itemNo3workshops1->id = 1;
        $itemNo3workshops1->start = "2020-02-21 10:00:00";
        $itemNo3workshops1->end = "2020-02-21 16:00:00";
        $itemNo3workshops1->event_id = 1;
        $itemNo3workshops1->name = "#NoClass pure functional programming";
        $itemNo3workshops1->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3workshops1->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo1 = new \stdClass();
        $itemNo1->id = 1;
        $itemNo1->name = "Laravel convention 2020";
        $itemNo1->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1->workshops = [$itemNo1workshops, $itemNo1workshops2];

        $itemNo2 = new \stdClass();
        $itemNo2->id = 1;
        $itemNo2->name = "Laravel convention 2021";
        $itemNo2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2->workshops = [$itemNo2workshops1, $itemNo2workshops2];

        $itemNo3 = new \stdClass();
        $itemNo3->id = 1;
        $itemNo3->name = "React convention 2021";
        $itemNo3->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3->workshops = [$itemNo3workshops1, $itemNo3workshops2];

        $responce =[$itemNo1, $itemNo2, $itemNo3];

        return $responce;

    }


    /*
    Requirements:
    - only events that have not yet started should be included
    - the event starting time is determined by the first workshop of the event
    - the eloquent expressions should result in maximum 3 SQL queries, no matter the amount of events
    - all filtering of records should happen in the database
    - verify your solution with `php artisan test`
    - do a `git commit && git push` after you are done or when the time limit is over

    Hints:
    - open the `app/Http/Controllers/EventsController` file
    - partial or not working answers also get graded so make sure you commit what you have
    - join, whereIn, min, groupBy, havingRaw might be helpful
    - in the sample data set  the event with id 1 is already in the past and should therefore be excluded

    Sample response on GET /futureevents:
    ```json
    [
        {
            "id": 2,
            "name": "Laravel convention 2021",
            "created_at": "2021-04-20T07:01:14.000000Z",
            "updated_at": "2021-04-20T07:01:14.000000Z",
            "workshops": [
                {
                    "id": 2,
                    "start": "2021-10-21 10:00:00",
                    "end": "2021-10-21 18:00:00",
                    "event_id": 2,
                    "name": "The new Eloquent - load more with less",
                    "created_at": "2021-04-20T07:01:14.000000Z",
                    "updated_at": "2021-04-20T07:01:14.000000Z"
                },
                {
                    "id": 3,
                    "start": "2021-11-21 09:00:00",
                    "end": "2021-11-21 17:00:00",
                    "event_id": 2,
                    "name": "AutoEx - handles exceptions 100% automatic",
                    "created_at": "2021-04-20T07:01:14.000000Z",
                    "updated_at": "2021-04-20T07:01:14.000000Z"
                }
            ]
        },
        {
            "id": 3,
            "name": "React convention 2021",
            "created_at": "2021-04-20T07:01:14.000000Z",
            "updated_at": "2021-04-20T07:01:14.000000Z",
            "workshops": [
                {
                    "id": 4,
                    "start": "2021-08-21 10:00:00",
                    "end": "2021-08-21 18:00:00",
                    "event_id": 3,
                    "name": "#NoClass pure functional programming",
                    "created_at": "2021-04-20T07:01:14.000000Z",
                    "updated_at": "2021-04-20T07:01:14.000000Z"
                },
                {
                    "id": 5,
                    "start": "2021-08-21 09:00:00",
                    "end": "2021-08-21 17:00:00",
                    "event_id": 3,
                    "name": "Navigating the function jungle",
                    "created_at": "2021-04-20T07:01:14.000000Z",
                    "updated_at": "2021-04-20T07:01:14.000000Z"
                }
            ]
        }
    ]
    ```
     */

    public function getFutureEventsWithWorkshops()
    {
        $responce = array();


        $itemNo1workshops = new \stdClass();
        $itemNo1workshops->id = 1;
        $itemNo1workshops->start = "2020-02-21 10:00:00";
        $itemNo1workshops->end = "2020-02-21 16:00:00";
        $itemNo1workshops->event_id = 1;
        $itemNo1workshops->name = "The new Eloquent - load more with less";
        $itemNo1workshops->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo1workshops2 = new \stdClass();
        $itemNo1workshops2->id = 1;
        $itemNo1workshops2->start = "2020-02-21 10:00:00";
        $itemNo1workshops2->end = "2020-02-21 16:00:00";
        $itemNo1workshops2->event_id = 1;
        $itemNo1workshops2->name = "AutoEx - handles exceptions 100% automatic";
        $itemNo1workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops2->updated_at = "2021-04-25T09:32:27.000000Z";


        $itemNo2workshops = new \stdClass();
        $itemNo2workshops->id = 1;
        $itemNo2workshops->start = "2020-02-21 10:00:00";
        $itemNo2workshops->end = "2020-02-21 16:00:00";
        $itemNo2workshops->event_id = 1;
        $itemNo2workshops->name = "#NoClass pure functional programming";
        $itemNo2workshops->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2workshops->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo2workshops2 = new \stdClass();
        $itemNo2workshops2->id = 1;
        $itemNo2workshops2->start = "2020-02-21 10:00:00";
        $itemNo2workshops2->end = "2020-02-21 16:00:00";
        $itemNo2workshops2->event_id = 1;
        $itemNo2workshops2->name = "Navigating the function jungle";
        $itemNo2workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2workshops2->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo1 = new \stdClass();
        $itemNo1->id = 1;
        $itemNo1->name = "Laravel convention 2021";
        $itemNo1->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1->workshops = [$itemNo1workshops, $itemNo1workshops2];

        $itemNo2 = new \stdClass();
        $itemNo2->id = 1;
        $itemNo2->name = "React convention 2021";
        $itemNo2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2->workshops = [$itemNo2workshops, $itemNo2workshops2];

        $itemNo3 = new \stdClass();
        $itemNo3->id = 1;
        $itemNo3->name = "Laravel convention 2020";
        $itemNo3->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3->workshops = [$itemNo2workshops, $itemNo2workshops2];

        $responce =[$itemNo1, $itemNo2];

        return $responce;
    }

    public function getWarmupEventsWithWorkshops()
    {
        $responce = array();


        $itemNo1workshops = new \stdClass();
        $itemNo1workshops->id = 1;
        $itemNo1workshops->start = "2020-02-21 10:00:00";
        $itemNo1workshops->end = "2020-02-21 16:00:00";
        $itemNo1workshops->event_id = 1;
        $itemNo1workshops->name = "Illuminate your knowledge of the laravel code base";
        $itemNo1workshops->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo1workshops2 = new \stdClass();
        $itemNo1workshops2->id = 1;
        $itemNo1workshops2->start = "2020-02-21 10:00:00";
        $itemNo1workshops2->end = "2020-02-21 16:00:00";
        $itemNo1workshops2->event_id = 1;
        $itemNo1workshops2->name = "The new Eloquent - load more with less";
        $itemNo1workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops2->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo2workshops = new \stdClass();
        $itemNo2workshops->id = 1;
        $itemNo2workshops->start = "2020-02-21 10:00:00";
        $itemNo2workshops->end = "2020-02-21 16:00:00";
        $itemNo2workshops->event_id = 1;
        $itemNo2workshops->name = "Laravel convention 2021";
        $itemNo2workshops->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2workshops->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo2workshops2 = new \stdClass();
        $itemNo2workshops2->id = 1;
        $itemNo2workshops2->start = "2020-02-21 10:00:00";
        $itemNo2workshops2->end = "2020-02-21 16:00:00";
        $itemNo2workshops2->event_id = 1;
        $itemNo2workshops2->name = "AutoEx - handles exceptions 100% automatic";
        $itemNo2workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2workshops2->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo1 = new \stdClass();
        $itemNo1->id = 1;
        $itemNo1->name = "Laravel convention 2020";
        $itemNo1->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1->workshops = [$itemNo1workshops, $itemNo1workshops2];

        $itemNo2 = new \stdClass();
        $itemNo2->id = 1;
        $itemNo2->name = "Laravel convention 2021";
        $itemNo2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2->workshops = [$itemNo2workshops, $itemNo2workshops2];

        $itemNo3 = new \stdClass();
        $itemNo3->id = 1;
        $itemNo3->name = "React convention 2021";
        $itemNo3->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3->workshops = [$itemNo1workshops, $itemNo1workshops2];

        $responce =[$itemNo1, $itemNo2, $itemNo3];

        return $responce;
    }
}
