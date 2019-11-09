function json_biodata(name, age, address, hobbies, is_married, list_school, skills, interest_in_coding) {
    let bio = {
        name: name,
        name: age,
        address: address,
        hobbies: hobbies,
        is_married: is_married,
        list_schools: list_school,
        skills: skills,
        interest_in_coding: interest_in_coding
    }

    return JSON.stringify(biodata);
}

json_biodata("NUR IHSAN",
			 22,
			 "Jl. HM Yasin Limpo No. 47", 
			 [ "Playing Game", "Reading Book", "Writing Code" ], 
			 false, 
			 [ { "name":"SDN 33","year_in":"2006","year_out":"2011","major":null },
                    { "name":"SMPN 2","year_in":"2011","year_out":"2013","major":null }, 
                    { "name":"SMAN 1","year_in":"2013","year_out":"2015","major":"IPA" }, 
                    { "name":"UIN MAKASSAR","year_in":"2015","year_out":"2019","major":"Teknik Informatika" } ],
             [ { "skill_name":"HTML","level":"advanced" },
               { "skill_name":"PHP","level":"advanced" }, 
               { "skill_name":"JS","level":"beginner" }, 
               { "skill_name":"C++","level":"beginner" }, 
               { "skill_name":"Phyton","level":"beginner" } ],
             true);
