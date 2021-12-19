<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Note;

class NoteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_logged_in_user_see_notes(){
        $response = $this->get('/dashboard')
        ->assertRedirect('/login');
    }
    public function test_check_user_notes()
    {
        $user = '61be36cb018dde6b0231de7a';

        $result = Note::where('user', $user)->get();
        $arrayResult = [];
        foreach ($result as $value) {
            $arrayResult['user'] = $user;
            $arrayResult['title'] = $value->title;
            $arrayResult['initialDate'] = $value->initialDate;
            $arrayResult['finalDate'] = $value->finalDate;
            $arrayResult['description'] = $value->description;
            $arrayResult['image'] = $value->image;
            $arrayResult['status'] = $value->status;
        };

        $expected=[
            "user" => "61be36cb018dde6b0231de7a",
            "title" => "Fazer Bolo",
            "initialDate" => "2021-12-18",
            "finalDate" => "2021-12-20",
            "description" => "Bolo de chocolate",
            "image" => "85bfaafa5c4b53cb2f5c4908139d1477.jpg",
            "status" => "Aberto"
        ];
        $this->assertEquals($expected,$arrayResult,"Unsuccessful test");
    }

    public function test_check_note_by_id()
    {
        $id = '61be5822018dde6b0231de81' ;
        $data = Note::find($id)->get();
        $expected=[];
        foreach ($data as $value){
            $expected=$value->title;
        }
        
        $this->assertNotNull($expected,"Note not found");
        


    }
}
