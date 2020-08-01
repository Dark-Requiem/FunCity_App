<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class GrammysController extends Controller
{
    public function GrammysStore() {
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $grammyCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $grammys = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Grammys.Index', ['grammys' => $grammys, 'grammyCount' => $grammyCount]);
    }

    // User

    public function AddComment() {
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $grammy = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('grammyid')) ]);
        $Comments = $grammy->Comments;
        if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
            $Comments = [$comment];
        } else {
            $Comments = [$comment, ...$Comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('grammyid'))
        ],[
            '$set' => [ 'Comments' => $Comments ]
        ]);

        return redirect("/grammys/".request('grammyid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $grammy = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Grammys.Details', [ "grammy" => $grammy]);
    }

    // Admin

    public function Index() {
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $grammys = $collection->find();  
        return view('Admin.Grammys.Index', ['grammys' => $grammys]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $grammy = $collection->find();
        return view('Admin.Grammys.Create', [ "grammys" => $grammy ]);
    }

    public function Store() {
        $grammy = [
            "year" => request("year"),
            "nominee" => request("nominee"),
            "workers" => request("workers"),
            "winner" => request("winner"),
            "Rating" => [],
            "Comments" => []
        ];
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $insertOneResult = $collection->insertOne($grammy);
        return redirect("/admin/grammys");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $grammy = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Grammys.Edit', [ "grammy" => $grammy ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $grammy = [
            "year" => request("year"),
            "nominee" => request("nominee"),
            "workers" => request("workers"),
            "winner" => request("winner"),
            "Rating" => [],
            "Comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("grammyid"))
        ], [
            '$set' => $grammy
        ]);
        return redirect('/admin/grammys/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $grammy = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Grammys.Delete', [ "grammy" => $grammy ]);
    }
    
    public function Remove(){
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("grammyid"))
        ]);
        return redirect('/admin/grammys/');
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->EMMA_DBPROJECT->Grammys;
        $grammy = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Grammys.Details', [ "grammy" => $grammy ]);
    }

}