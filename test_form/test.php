


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container bg-secondary">
        <h1>Testas</h1>
    </div>
    <form  action='http://localhost/PHP/another_form/test_form/answers.php' method="post">
        <div class="container">
            <div class="text-start">
                <h5 class="mb-5">Tik vienas atsakymas teisingas.</h5>
                <!-- first question -->
                <h6>1. Kuris PHP kintamasis užrašytas teisingai?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox1" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        $user
                    </label>
                </div>
                <div class="form-check">
                    <<input class="form-check-input" type="checkbox" name="checkbox1" value="false">
                        <label class="form-check-label" for="flexRadioDefault1">
                            &user
                        </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox1" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        user;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox1" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        $_user;
                    </label>
                </div>

                <!-- second question -->
                <h6 class="mt-5">2. Kurio sakinio sintaksė neteisinga?</h6>
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" name="checkbox2" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        echo $variable;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox2" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        $a = $b = '';
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox2" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        $echo numbers;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox2" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        die;
                    </label>
                </div>

                <!-- third question -->
                <h6 class="mt-5">3. Kuris teiginys sukurs tuščią masyvą?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox3" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        array_new;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox3" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        new_array;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox3" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        $array = [];
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox3" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        $array = new_array;
                    </label>
                </div>

                <!-- fourth question -->
                <h6 class="mt-5">4. Kaip iš formos, kuri siuntė GET metodu, gauti informaciją?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox4" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        GET = ['..'];
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox4" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        $_POST = get[];
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox4" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        GET_info;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox4" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        $_GET['...'];
                    </label>
                </div>

                <!-- fith question -->
                <h6 class="mt-5">5. Kuri komanda teisinga (CSS)?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox5" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        style='background-color: #ffff;'
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox5" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        css: background-color = #fffff
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox5" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        body = background-color ['#fffff']
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox5" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        background-color is #fffff
                    </label>
                </div>

                <!-- sixt question -->
                <h6 class="mt-5">6. Kam skirta ši komanda - img src="image.jpg" alt=""?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox6" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        sukurti naują foną;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox6" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        įkelti paveikslėlį
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox6" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        pakeisti fono spalvą
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox6" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        parašyti komentarą
                    </label>
                </div>

                <!-- seventh question -->
                <h6 class="mt-5">7. Kaip įterpti komentarą (HTML)?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox7" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        ** - **
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox7" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        !- --->
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox7" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        !! - !!
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox7" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                       < !-- -->
                    </label>
                </div>

                <!-- eight question -->
                <h6 class="mt-5">8. Kuriuo elementu kuriamas nenumeruotas sąrašas <..>?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox8" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        al
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox8" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        ol
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox8" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        ul
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox8" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        li
                    </label>
                </div>

                <!-- ninth question -->
                <h6 class="mt-5">9. Kurioje vietoje HTML rašoma javascript nuoroda?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox9" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        gale prieš body
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox9" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        po title
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox9" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        tarp head ir body skilties
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="checkbox9" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        atskirame scripte
                    </label>
                </div>

                <!-- tenth question -->
                <h6 class="mt-5">10. Kuris ciklas parašytas teisingai (javascript)?</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox10" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        for($i=0; $i<=10; $i++) </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox10" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        for(let i=0; i<=10; i++) </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox10" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        myfuntion(i=0; i<=10; i++) </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checkbox10" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                        let foreach (i=0; i<=10; ++i ) </label>
                </div>
                <button type="submit" class="btn btn-info mt-5" name="submit">Rezultatas</button>
            </div>
        </div>
    </form>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>