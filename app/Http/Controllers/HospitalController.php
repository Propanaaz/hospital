<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Consultant;
use App\Models\History;
use App\Models\Pregbio;
use App\Models\Pregnancy;
use App\Models\Scheme;
use App\Models\Specialpoint;
use App\Models\Test;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HospitalController extends Controller
{
    public function biodata(Request $request){
        if(auth()->check()){
        $rand =  Str::random(6);
        return view("biodata",compact("rand"));
        }else{
            return redirect("/")->with("message","Please Login");

        }
    }

    public function send_biodata(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "lname"=>"required",
            "fname"=>"required",
            "mname"=>"required",
            "address"=>"required",
            "age"=>"required",
            "occupation"=>"required",
            "phone_no"=>"required",
            "place_of_origin"=>"required",
            "tribe"=>"required",
            "nok_name"=>"required",
            "nok_address"=>"required",
            "nok_phone"=>"required",
            "file_cat"=>"required",
            "user_id"=>"required",
            "sex"=>"required"
        ]);

        $id = $request->get("user_id");
            Biodata::create($data);
             return redirect("/patient_dashboard/".$id)->with("message","Registration Successful");

            }else{
                return redirect("/")->with("message","Please Login");

            }
    }


    public function patient_dashboard(Request $request, string $id){
        if(auth()->check()){

    $biodata = Biodata::where("user_id",$id)->first();
    return view("patient_dashboard",compact("biodata"));

        }else{
            return redirect("/")->with("message","Please Login");

        }

    }


    public function send_patient_dashboard(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "lname"=>"required",
            "fname"=>"required",
            "mname"=>"required",
            "address"=>"required",
            "age"=>"required",
            "occupation"=>"required",
            "phone_no"=>"required",
            "place_of_origin"=>"required",
            "tribe"=>"required",
            "nok_name"=>"required",
            "nok_address"=>"required",
            "nok_phone"=>"required",
            "file_cat"=>"required",
            "user_id"=>"required",
            "sex"=>"required"
        ]);

        $id = $request->get("user_id");
        $record = Biodata::where("user_id",$id)->first();
        $record->lname = $request->get("lname");
        $record->fname = $request->get("fname");
        $record->mname = $request->get("mname");
        $record->address = $request->get("address");
        $record->age = $request->get("age");
        $record->occupation = $request->get("occupation");
        $record->phone_no = $request->get("phone_no");
        $record->place_of_Origin = $request->get("place_of_origin");
        $record->tribe = $request->get("tribe");
        $record->nok_name = $request->get("nok_name");
        $record->nok_address = $request->get("nok_address");
        $record->nok_phone = $request->get("nok_phone");
        $record->file_cat = $request->get("file_cat");
        $record->user_id = $request->get("user_id");
        $record->sex = $request->get("sex");
        $record->save();
             return redirect("/patient_dashboard/".$id)->with("message","Record Updated Successfully");

            }else{
                return redirect("/")->with("message","Please Login");

            }
    }





    public function consultant(Request $request, string $id){
        if(auth()->check()){

        $user_id = $id;
        $consultant = Consultant::where("user_id",$id)->get();
        return view("consultant",compact("consultant","user_id"));

    }else{
        return redirect("/")->with("message","Please Login");

    }
    }



    public function send_consultant(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "type"=>"required",
            "name"=>"required",
        ]);
        $data['user_id'] = $request->get("user_id");

        $id = $request->get("user_id");
            Consultant::create($data);
             return redirect("/consultant/".$id)->with("message","Record Updated Successfully");

            }else{
                return redirect("/")->with("message","Please Login");

            }
    }





    public function medical_history(Request $request,string $id){
        if(auth()->check()){

        $user_id = $id;
        $history = History::where("user_id",$id)->get();
        return view("history",compact("history","user_id"));

    }else{
        return redirect("/")->with("message","Please Login");

    }

    }



    public function send_medical_history(Request $request){
        if(auth()->check()){

            $data = $request->validate([
                "type"=>"required",
                "answer"=>"required",
            ]);
            $data['user_id'] = $request->get("user_id");

            $id = $request->get("user_id");
            History::create($data);
             return redirect("/medical_history/".$id)->with("message","Record Updated Successfully");

            }else{
                return redirect("/")->with("message","Please Login");

            }
    }

    public function preg_biodata(Request $request, string $id){
        if(auth()->check()){

        $user_id = $id;
        $pregbio = Pregbio::where("user_id",$id)->first();
        return view("pregbio",compact("pregbio","user_id"));

    }else{
        return redirect("/")->with("message","Please Login");

    }

    }



    public function send_preg_biodata(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "total_preg"=>"required",
            "total_liv_children"=>"required",
            "lmp"=>"required",
            "mage"=>"required",
            "user_id"=>"required",
            "edd"=>"required",
            "ip_num"=>"required",
            "op_num"=>"required",
            "preg_duration"=>"required"

        ]);

         $id = $request->get("user_id");
         if(Pregbio::where("user_id",$id)->exists()){
            $record = Pregbio::where("user_id",$id)->first();
            $record->total_preg = $request->get("total_preg");
            $record->total_liv_children = $request->get("total_liv_children");
            $record->lmp = $request->get("lmp");
            $record->mage = $request->get("mage");
            $record->edd = $request->get("edd");
            $record->ip_num = $request->get("ip_num");
            $record->op_num = $request->get("op_num");
            $record->preg_duration = $request->get("preg_duration");
            $record->user_id = $request->get("user_id");
            $record->save();
         }else{
            Pregbio::create($data);

         }
             return redirect("/preg_biodata/".$id)->with("message","Record Updated Successfully");

            }else{
                return redirect("/")->with("message","Please Login");

            }
    }


    public function pregnancy_history(Request $request, string $id){
        if(auth()->check()){

        $user_id = $id;
        $pregnancy_history = Pregnancy::where("user_id",$id)->get();
        return view("pregnancy_history",compact("pregnancy_history","user_id"));

    }else{
        return redirect("/")->with("message","Please Login");

    }
    }

    public function send_pregnancy_history(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "dob"=>"required",
            "preg_duration"=>"required",
            "birth_weight"=>"required",
            "preg_complication"=>"required",
            "lab_complication"=>"required",
            "premium"=>"required",
        ]);
        $data['user_id'] = $request->get("user_id");

        $id = $request->get("user_id");
        Pregnancy::create($data);
         return redirect("/pregnancy_history/".$id)->with("message","Record Updated Successfully");

        }else{
            return redirect("/")->with("message","Please Login");

        }
}

    public function scheme(Request $request, string $id){
        if(auth()->check()){

        $user_id = $id;
        $scheme = Scheme::where("user_id",$id)->get();
        return view("scheme",compact("scheme","user_id"));

    }else{
        return redirect("/")->with("message","Please Login");

    }
    }




    public function send_scheme(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "type"=>"required",
            "number"=>"required",
            "hmo_name"=>"required",
            "hmo_code"=>"required",
            "hmo_no"=>"required",
        ]);
        $data['user_id'] = $request->get("user_id");

        $id = $request->get("user_id");
        Scheme::create($data);
         return redirect("/scheme/".$id)->with("message","Record Updated Successfully");

        }else{
            return redirect("/")->with("message","Please Login");

        }
}



    public function specialpoint(Request $request, string $id){
        if(auth()->check()){

        $user_id = $id;
        $specialpoint = Specialpoint::where("user_id",$id)->get();
        return view("specialpoint",compact("specialpoint","user_id"));

    }else{
        return redirect("/")->with("message","Please Login");

    }

    }





    public function send_specialpoint(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "name"=>"required",
        ]);
        $data['user_id'] = $request->get("user_id");
        $id = $request->get("user_id");
        Specialpoint::create($data);
         return redirect("/specialpoint/".$id)->with("message","Record Updated Successfully");

        }else{
            return redirect("/")->with("message","Please Login");

        }
}

    public function test(Request $request,string $id){
        if(auth()->check()){

        $user_id = $id;
        $test = Test::where("user_id",$id)->get();
        return view("test",compact("test","user_id"));

    }else{
        return redirect("/")->with("message","Please Login");

    }
    }

     public function send_test(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "type"=>"required",
            "remark"=>"required",
        ]);
        $data['user_id'] = $request->get("user_id");
        $id = $request->get("user_id");
        Test::create($data);
         return redirect("/test/".$id)->with("message","Record Updated Successfully");

        }else{
            return redirect("/")->with("message","Please Login");

        }
}

    public function ward(Request $request, string $id){
        if(auth()->check()){

        $user_id = $id;
        $ward = Ward::where("user_id",$id)->get();
        return view("ward",compact("ward","user_id"));

    }else{
        return redirect("/")->with("message","Please Login");

    }
    }

    public function send_ward(Request $request){
        if(auth()->check()){

        $data = $request->validate([
            "name"=>"required",
        ]);
        $data['user_id'] = $request->get("user_id");
        $id = $request->get("user_id");
        Ward::create($data);
         return redirect("/ward/".$id)->with("message","Record Updated Successfully");

        }else{
            return redirect("/")->with("message","Please Login");

        }
}




public function delete_ward(Request $request,string $id){
    if(auth()->check()){

    Ward::where("id",$id)->delete();
    $user_id = $request->get("user_id");
    return redirect("/ward/".$user_id)->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}


public function delete_biodata(Request $request,string $id){
    if(auth()->check()){

    Biodata::where("user_id",$id)->delete();

    return redirect("/all_patient")->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}




public function delete_test(Request $request,string $id){
    if(auth()->check()){

    Test::where("id",$id)->delete();
    $user_id = $request->get("user_id");
    return redirect("/test/".$user_id)->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}




public function delete_specialpoint(Request $request,string $id){
    if(auth()->check()){

    Specialpoint::where("id",$id)->delete();
    $user_id = $request->get("user_id");
    return redirect("/specialpoint/".$user_id)->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}




public function delete_pregnancy(Request $request,string $id){
    if(auth()->check()){

    Pregnancy::where("id",$id)->delete();
    $user_id = $request->get("user_id");
    return redirect("/pregnancy_history/".$user_id)->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}




public function delete_scheme(Request $request,string $id){
    if(auth()->check()){

    Scheme::where("id",$id)->delete();
    $user_id = $request->get("user_id");
    return redirect("/scheme/".$user_id)->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}




public function delete_medical_history(Request $request,string $id){
    if(auth()->check()){

    History::where("id",$id)->delete();
    $user_id = $request->get("user_id");
    return redirect("/medical_history/".$user_id)->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}



public function delete_consultant(Request $request,string $id){
    if(auth()->check()){

    Consultant::where("id",$id)->delete();
    $user_id = $request->get("user_id");
    return redirect("/consultant/".$user_id)->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}

public function delete_pregnancy_history(Request $request,string $id){
    if(auth()->check()){

    Pregnancy::where("id",$id)->delete();
    $user_id = $request->get("user_id");
    return redirect("/pregnancy_history/".$user_id)->with("message","Record Deleted Successfully");

}else{
    return redirect("/")->with("message","Please Login");

}
}


public function logout(Request $request){

    auth()->logout();
    return redirect("/")->with("message", "You have been logged Out Successfully");

}

public function all_patient(Request $request){
    if(auth()->check()){

    $patient = Biodata::all();
    return view("all_patient",compact("patient"));

}else{
    return redirect("/")->with("message","Please Login");

}
}

public function summary(Request $request,string $id){
    if(auth()->check()){

    $biodata = Biodata::where("user_id",$id)->first();
    $consultant = Consultant::where("user_id",$id)->get();
    $medical_history = History::where("user_id",$id)->get();
    $pregbio = Pregbio::where("user_id",$id)->first();
    $pregnancy_history = Pregnancy::where("user_id",$id)->get();
    $scheme = Scheme::where("user_id",$id)->get();
    $specialpoint = Specialpoint::where("user_id",$id)->get();
    $test = Test::where("user_id",$id)->get();
    $ward = Ward::where("user_id",$id)->get();
return view("summary",compact("biodata","consultant","medical_history","pregbio","pregnancy_history","scheme","specialpoint","test","ward"));

}else{
    return redirect("/")->with("message","Please Login");

}
}

public function login(Request $request){
    return view("login");
}

public function login2(Request $request){
    $data = $request->validate([
        "username"=>"required",
        "password"=>"required"
    ]);


    if(auth()->attempt(["email"=>$data["username"],"password"=>$data["password"]])){
        $request->session()->regenerate();
        return redirect("/all_patient")->with("message", "Login Successful");

    }
    return redirect("/")->with("message", "Invalid Login Credential");

}






public function create_user(Request $request){
    return view("create_user");
}



public function register_user(Request $request){
    $incomingFields = $request->validate([
        'username'=> ['required'],
        'type'=> ['required'],
        'email'=>['required','email'],
        'password'=>['required','max:15'],
        'password2'=>['required','max:15'],
    ]);
    $incomingFields["name"] = $request->input("username");

    $password = $incomingFields["password"];
    bcrypt($password);
    $password2 = $incomingFields["password2"];
    bcrypt($password2);
    if($password === $password2){
        if(User::where("name",$request->get("username"))->exists()){
            return redirect("/create_user")->with("message", "Userame Already Exist");
        }else{
            if(User::where("email",$request->get("email"))->exists()){
                return redirect("/create_user")->with("message", "Email Already Exists");
            }else{
                User::create($incomingFields);
                return redirect("/create_user")->with("message", "Account Creation Successful");
            }
        }
    }else{
        return redirect("/create_user")->with("message", "Password did not match");
    }
}


public function manage_admin(Request $request){
    $admin = User::all();
    return view("manage_admin",compact('admin'));
}

public function delete_admin(Request $request,int $id){

    User::where("id",$id)->delete();
    return redirect("/manage_admin");
}



}
