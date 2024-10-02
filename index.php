

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earthena-CPT</title>
    <link rel="stylesheet" href="/css/chat.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="font-sans custom-scrollbar">

 
    <div class="main h-screen fixed top-0 bottom-0 w-screen">
        <div id="left_panel" class="nav bg-gray-100 h-[70px] z-10  md:h- ">
            <div class="profile flex justify-between w-[100%] bg-blue-700 h-[70px] py-3 px-3 sticky top-0">
                <div class="profileImage">
                    <img src="./assets/girls.jpg"
                        class=" w-[40px] h-[40px] rounded-full border-white border-2 border-solid" alt="">
                </div>
                <div class="icons flex gap-4">
                    <svg class="m-2 fill-white md:block" onclick="addElementToArray()"
                        xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30">
                        <path
                            d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480v320q0 33-23.5 56.5T800-80H480Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                    </svg>
                    <div class="menupannel h-[100vh] w-[90vw] bg-slate-400 fixed   left-0 top-0 p-3 hidden md:hidden">
                        <ul class="flex flex-col gap-3">

                        </ul>
                    </div>
                    <div class="profilepannel h-[150px] w-[300px] bg-slate-400 absolute left-5 top-[60px] hidden drillox-menu"
                        id="drillox-menu">
                        <ul class="flex flex-col">
                            <li
                                class="unvealNavigator p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Hide pannel</li>
                            <li
                                class="home  p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Home</li>
                            <li
                                class="education  p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Education</li>
                            <li
                                class="health  p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Health</li>

                            <li id="OpenLoginDialog"
                                class="p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Log In</li>
                            <a href="#">
                                <li
                                    class="p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                    Get desktop assistant</li>
                            </a>
                            <a href="#">
                                <li
                                    class="p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                    Subscribe</li>
                            </a>
                        </ul>
                    </div>

                    <svg class=" menupannelIcon fill-white m-2  md:hidden " onclick="menuchat()"
                        xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg>
                    <div height="30" width="30" class=" hidden md:hidden" src="hide_panel.png" id="toggleButton"
                        class="features bg-blue-500 w-[40px] h-[40px]  rounded-full  p-2  ">
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                            width="24">
                            <path
                                d="M240-440h360v-80H240v80Zm0-120h360v-80H240v80Zm-80 400q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="chatmenu flex md:block">
                <div class=" menuchats fixed left-0 z-40 w-[70vw] h-[100vh] bg-slate-400 top-0 z-5 hidden  h-screen md:static md:w-full h-max md:block z-0 md:bg-slate-100 drilloxValue"
                    id="chats">
                    <!--WHERE THE HISTORIES ARE KEPT-->

                </div>
            </div>

        </div>

        <div id="LoginDialog"
            class="fixed inset-0 flex items-center justify-center z-50 hidden bg-opacity-50 backdrop-blur-sm">
            <div class="bg-gray-200 shadow-md p-6 w-[30%]  mt-4 lg:w-[30%] xl:w-[30%]">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Log In</h2>
                    <button id="CloseLoginDialog" class="text-blue-500 hover:text-blue-700">X</button>
                </div>
                <div class="LoginMain m-auto">
                    <div class="form  m-auto mt-2 md:w-[50%] lg:w-[90%] ">
                        <!-- <div
                            style="height:200px; background-repeat:no-repeat; background-position:center; background-image: url(&quot;./sphere1.gif&quot;);">
                        </div> -->
                        <h1 class="animate-bounce text-center headinglogin py-7 font-semibold">Cognosphere Dynamics Ltd
                        </h1>
                        <form action="login.php" method="POST">
                            <div class="fields">
                                <div class="outlineinput flex flex-col">
                                    <label for="IBMid" class="pt-4 pb-2 lable ">Sphere ID</label>
                                    <input type="email" placeholder="Your email is the Sphere ID" name="e_mail"
                                        id="IBMid" class="logininput placeholder-black-100">
                                </div>
                                <div class="outlineinput flex flex-col">
                                    <label for="IBMid" class="pt-4 pb-2 lable ">Passkey</label>
                                    <input type="password" placeholder="Unlock your Sphere ..." name="password"
                                        id="IBMid" class="logininput placeholder-black-100">
                                </div>
                                <small class="small"></small>
                                <div class="Allowlogin my-4">
                                    <button class="loginbtn  justify-between flex flex-row w-[100%] p-4 text-white "
                                        type="submit" value="Login" name="login">
                                        <p>Continue</p><svg focusable="false" preserveAspectRatio="xMidYMid meet"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true"
                                            width="16" height="16" viewBox="0 0 16 16" class="bx--btn__icon">
                                            <path d="M9.3 3.7L13.1 7.5 1 7.5 1 8.5 13.1 8.5 9.3 12.3 10 13 15 8 10 3z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="checkbox flex lfex-row">
                                    <input type="checkbox" name="" id="checkbox" class="checkboxinput w-4 py-1">
                                    <label for="checkbox" class="checkboxlabel px-2 my-2">Remember me</label>
                                    <svg class="m-2" focusable="false" preserveAspectRatio="xMidYMid meet"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="16" height="16"
                                        viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="M8.5 11L8.5 6.5 6.5 6.5 6.5 7.5 7.5 7.5 7.5 11 6 11 6 12 10 12 10 11zM8 3.5c-.4 0-.8.3-.8.8S7.6 5 8 5c.4 0 .8-.3.8-.8S8.4 3.5 8 3.5z">
                                        </path>
                                        <path
                                            d="M8,15c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S11.9,15,8,15z M8,2C4.7,2,2,4.7,2,8s2.7,6,6,6s6-2.7,6-6S11.3,2,8,2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </form>
                        <div class="divdont my-4 pb-7 ">
                            <p class="dontlink ">Don't have a Sphere ID?</p>
                            <div class="my-4 dont">
                                <button class=" justify-between flex flex-row w-[100%] p-4 dont"
                                    id="OpenRegisterDialog">
                                    <p>Create an Account</p><svg focusable="false" preserveAspectRatio="xMidYMid meet"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true"
                                        width="16" height="16" viewBox="0 0 16 16" class="bx--btn__icon">
                                        <path d="M9.3 3.7L13.1 7.5 1 7.5 1 8.5 13.1 8.5 9.3 12.3 10 13 15 8 10 3z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="content-center forgot  justify-between">
                            <p>Forgot Sphere ID? </p>
                            <a class="loginlink" href="#" class="text-blue">Contact Cognosphere help desk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="RegisterDialog"
            class="fixed inset-0 flex items-center justify-center z-50 hidden bg-opacity-50 backdrop-blur-sm ">
            <div class="bg-gray-200 shadow-md p-6 w-[30%]">
                <div class="flex justify-between items-center w-[90%] m-auto">
                    <h2 class="text-xl font-semibold">Register</h2>
                    <button id="CloseRegisterDialog" class="text-blue-500 hover:text-blue-700">X</button>
                </div>
                <div class="SignupMain mb-20 lg:w-[100%] ">
                    <div class="form w-[90%] m-auto mt-2 md:w-[90%] ">
                        <h1 class="text-left headingsignup py-3">Create a Sphere ID </h1>
                        <p class="flex">Already have a Sphere ID?&nbsp;<a href="index.html" style="color:blue;">Login to
                                Spherical</a></p>
                        <form action="signup.php" method="POST">
                            <div class="hidder">
                                <div class="accounter ">
                                    <p class="flex flex-row">
                                        <svg focusable="false" class="mx-2 my-0.5" preserveAspectRatio="xMidYMid meet"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="16"
                                            height="16" viewBox="0 0 32 32" aria-hidden="true">
                                            <path
                                                d="M23.7642 6.8593l1.2851-1.5315A13.976 13.976 0 0020.8672 2.887l-.6836 1.8776A11.9729 11.9729 0 0123.7642 6.8593zM27.81 14l1.9677-.4128A13.8888 13.8888 0 0028.14 9.0457L26.4087 10A12.52 12.52 0 0127.81 14zM20.1836 27.2354l.6836 1.8776a13.976 13.976 0 004.1821-2.4408l-1.2851-1.5315A11.9729 11.9729 0 0120.1836 27.2354zM26.4087 22L28.14 23a14.14 14.14 0 001.6382-4.5872L27.81 18.0659A12.1519 12.1519 0 0126.4087 22zM16 30V2a14 14 0 000 28z">
                                            </path>
                                            <title></title>
                                        </svg>
                                        User Account Information
                                    </p>
                                </div>
                            </div>
                            <div class="pb-4 fields">

                                <div class="outlineinput flex flex-col">
                                    <label for="IBMid" class="pt-4 pb-2 lable ">E-mail</label>
                                    <input type="email" placeholder="E-mail" name="e_mail" id="IBMid"
                                        class="logininput placeholder-black-100">
                                </div>
                                <small class="small">Your email address will become your Sphere ID, which you'll use to
                                    log into spherical.cognospheredynamics.com.</small>

                                <div class="outlineinput flex flex-col">
                                    <label for="IBMid" class="pt-4 pb-2 lable ">Country phone number</label>
                                    <input type="number" name="phone_number" placeholder="+256 7xx xxxxxx" id="IBMid"
                                        class="logininput placeholder-black-100">
                                </div>
                                <div class="name lg:grid grid-cols-2 gap-3">
                                    <div class="outlineinput flex flex-col">
                                        <label for="IBMid" class="pt-4 pb-2 lable ">First name</label>
                                        <input type="text" name="first_name" placeholder="Surname" id="IBMid"
                                            class="logininput placeholder-black-100">
                                    </div>
                                    <div class="outlineinput flex flex-col">
                                        <label for="IBMid" class="pt-4 pb-2 lable ">Last name</label>
                                        <input type="text" name="last_name" placeholder="Given name" id="IBMid"
                                            class="logininput placeholder-black-100">
                                    </div>
                                </div>
                                <div class="name lg:grid grid-cols-2 gap-3">
                                    <div class="outlineinput flex flex-col">
                                        <label for="IBMid" class="pt-4 pb-2 lable ">Password</label>
                                        <input type="text" name="password" placeholder="Password" id="IBMid"
                                            class="logininput placeholder-black-100">
                                    </div>
                                    <div class="outlineinput flex flex-col">
                                        <label for="IBMid" class="pt-4 pb-2 lable ">Verify Password</label>
                                        <input type="text" name="password" placeholder="Verify password" id="IBMid"
                                            class="logininput placeholder-black-100">
                                    </div>
                                </div>
                                <div class="name lg:grid grid-cols-2 gap-3">
                                    <div class="outlineinput flex flex-col">
                                        <label for="IBMid" class="pt-4 pb-2 lable ">Country</label>
                                        <input type="text" name="country_region" placeholder="Country or Region"
                                            id="IBMid" class="logininput placeholder-black-100">
                                    </div>
                                    <div class="outlineinput flex flex-col">
                                        <label for="IBMid" class="pt-4 pb-2 lable ">City or State</label>
                                        <input type="text" name="city_state" placeholder="City or State" id="IBMid"
                                            class="logininput placeholder-black-100">
                                    </div>
                                </div>
                            </div>
                            <div class="divdont my-4 pb-7 hover:bg-blue">
                                <div class="my-4 dont w-[100%]">
                                    <button class="  w-[100%] p-5 dont " type="submit" name="submit">
                                        <p>Join the Sphere...</p>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="content ">
            <div class="reveal hidden fixed left-0 top-3 mx-3 px-2 bg-blue-500 w-[40px] h-[40px] rounded-full p-2"
                id="toggleReveal">
                <img class="fill-white" height="40" width="40" src="show_panel.png" />
            </div>
            <div height="30" width="30" id="toggleReveal"
                class="hidden features bg-blue-500 w-[40px] h-[40px]  rounded-full  p-2">
                <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                    width="24">
                    <path
                        d="M240-440h360v-80H240v80Zm0-120h360v-80H240v80Zm-80 400q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z" />
                </svg>
            </div>
            <div class="headerbar top-0 my-2 py-2 px-5  w-20 absolute right-0 hidden md:block">
                <div class="features bg-blue-500 w-[40px] h-[40px]  rounded-full  p-2  ">
                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                        width="24">
                        <path
                            d="M240-440h360v-80H240v80Zm0-120h360v-80H240v80Zm-80 400q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z" />
                    </svg>
                </div>
            </div>

            <style>
                /* global.css */

                @tailwind base;
                @tailwind components;
                @tailwind utilities;

                /* width */
                ::-webkit-scrollbar {
                    width: 5px;
                }

                /* Track */
                ::-webkit-scrollbar-track {
                    background: rgb(229 231 235);
                }

                /* Handle */
                ::-webkit-scrollbar-thumb {
                    background: rgb(29 78 216);
                    border-radius: 5px;
                }

                /* Handle on hover */
                ::-webkit-scrollbar-thumb:hover {
                    background: rgb(29 78 216);
                }
            </style>

            <div id="holder" for="earthenaOutputString"
                class="text overflow-auto p-2 pt-1 pb-[150px] md:w-[55%]  md:ml-[20%] pb-[150px] scroll-content">
            </div>

            <div class="inputfield flex flex-col gap-2 fixed bottom-0 w-screen bg-white  md:w-[80%] ">
                <form for="earthenaInputString" action="" method="get"
                    class="field -z-3 w-screen md:w-[70%] m-auto flex flex-col justify-between p-2">
                    <div id="recommends" class="hidden md:grid grid-cols-2 gap-3 w-[90%] mb-[5px] ">
                        <div class="h-[50px] bg-[#f0f0f0] p-2">

                            <p>Sing me a song.</p>

                        </div>
                        <div class="h-[50px] bg-[#f0f0f0] py-2">

                            <p>Write me a job application letter.</p>

                        </div>
                        <div class="h-[50px] bg-[#f0f0f0]">

                            <p>Video call me.</p>

                        </div>
                        <div class="h-[50px] w-[100%] items-center bg-[#f0f0f0] p-2">

                            <p class="m-auto">Transoform my image into cartoon.</p>

                        </div>
                    </div>
                    <div id="userIO" class=" w-full md:w-[90%] flex items-center border border-blue-500 py-2">
                        <svg class="inputpannelIcon fill-blue-500 m-2 md:hidden " xmlns="http://www.w3.org/2000/svg"
                            height="40" viewBox="0 -960 960 960" width="30">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>
                        <div
                            class="inputpannel absolute -top-16 bg-slate-200 p-2 hidden md:flex items-center md:static md:bg-white ">
                            <button id="btn" onclick=""><img
                                    class="ml-2 h-10 w-10 transform transition-transform hover:scale-110 drilloxBtn"
                                    src="mic_ico.png"></button>
                            <button id="btn" onclick=""><img
                                    class="ml-2 h-10 w-10 transform transition-transform hover:scale-110 drilloxBtn"
                                    src="video_ico.png"></button>
                        </div>

                        <input id="earthenaInputString" onkeypress="pressed(this)"
                            class="appearance-none bg-transparent border-none w-[90%] text-gray-700 ml-4 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="Send a message..." aria-label="Full name">
                        <button id="sendToEarthenaButton" onclick="sendMessage(); sendDataToPHP();"><img
                                class="h-10 w-10 transform transition-transform hover:scale-110 pr-2"
                                src="send_ico.png"></button>
                    </div>
                    <div id="copyright" class="copyright bg-slate-300 w-[90%]  my-[10px] hidden md:block">

                        <p class="text-black text-center"><a href="#">Submit querry.</a> Earthena may produce inacurate
                            information about
                            people, places or facts. <a href="#">Request for API</a></p>
                    </div>
                </form>

            </div>
        </div>

        <script>
            const contentone = ` <div class="reveal hidden fixed left-0 top-3 mx-3 px-2 bg-blue-500 w-[40px] h-[40px] rounded-full p-2"
                id="toggleReveal">
                <img class="fill-white" height="40" width="40" src="show_panel.png" />
            </div>
            <div height="30" width="30" id="toggleReveal"
                class="hidden features bg-blue-500 w-[40px] h-[40px]  rounded-full  p-2">
                <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                    width="24">
                    <path
                        d="M240-440h360v-80H240v80Zm0-120h360v-80H240v80Zm-80 400q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z" />
                </svg>
            </div>
            <div class="headerbar top-0 my-2 py-2 px-5  w-20 absolute right-0 hidden md:block">
                <div class="features bg-blue-500 w-[40px] h-[40px]  rounded-full  p-2  ">
                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                        width="24">
                        <path
                            d="M240-440h360v-80H240v80Zm0-120h360v-80H240v80Zm-80 400q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z" />
                    </svg>
                </div>
            </div>

            <style>
                /* global.css */

                @tailwind base;
                @tailwind components;
                @tailwind utilities;

                /* width */
                ::-webkit-scrollbar {
                    width: 5px;
                }

                /* Track */
                ::-webkit-scrollbar-track {
                    background: rgb(229 231 235);
                }

                /* Handle */
                ::-webkit-scrollbar-thumb {
                    background: rgb(29 78 216);
                    border-radius: 5px;
                }

                /* Handle on hover */
                ::-webkit-scrollbar-thumb:hover {
                    background: rgb(29 78 216);
                }
            </style>

            <div id="holder" for="earthenaOutputString"
                class="text overflow-auto p-2 pt-1 pb-[150px] md:w-[55%]  md:ml-[20%] pb-[150px] scroll-content">
                lorem2000
             </div>

            <div class="inputfield flex flex-col gap-2 fixed bottom-0 w-screen bg-white  md:w-[80%] ">
                <form for="earthenaInputString" action="" method="get"
                    class="field -z-3 w-screen md:w-[70%] m-auto flex flex-col justify-between p-2">
                    <div id="recommends" class="hidden md:grid grid-cols-2 gap-3 w-[90%] mb-[5px] ">
                        <div class="h-[50px] bg-[#f0f0f0] p-2">

                            <p>Sing me a song.</p>

                        </div>
                        <div class="h-[50px] bg-[#f0f0f0] py-2">

                            <p>Write me a job application letter.</p>

                        </div>
                        <div class="h-[50px] bg-[#f0f0f0]">

                            <p>Video call me.</p>

                        </div>
                        <div class="h-[50px] w-[100%] items-center bg-[#f0f0f0] p-2">

                            <p class="m-auto">Transoform my image into cartoon.</p>

                        </div>
                    </div>
                    <div id="userIO" class=" w-full md:w-[90%] flex items-center border border-blue-500 py-2">
                        <svg class="inputpannelIcon fill-blue-500 m-2 md:hidden " xmlns="http://www.w3.org/2000/svg"
                            height="40" viewBox="0 -960 960 960" width="30">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>
                        <div
                            class="inputpannel absolute -top-16 bg-slate-200 p-2 hidden md:flex items-center md:static md:bg-white ">
                            <button id="btn" onclick=""><img
                                    class="ml-2 h-10 w-10 transform transition-transform hover:scale-110 drilloxBtn"
                                    src="mic_ico.png"></button>
                            <button id="btn" onclick=""><img
                                    class="ml-2 h-10 w-10 transform transition-transform hover:scale-110 drilloxBtn"
                                    src="video_ico.png"></button>
                        </div>

                        <input id="earthenaInputString" onkeypress="pressed(this)"
                            class="appearance-none bg-transparent border-none w-[90%] text-gray-700 ml-4 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="Send a message..." aria-label="Full name">
                        <button id="sendToEarthenaButton" onclick="sendMessage(); sendDataToPHP();"><img
                                class="h-10 w-10 transform transition-transform hover:scale-110 pr-2"
                                src="send_ico.png"></button>
                    </div>
                    <div id="copyright" class="copyright bg-slate-300 w-[90%]  my-[10px] hidden md:block">

                        <p class="text-black text-center"><a href="#">Submit querry.</a> Earthena may produce inacurate
                            information about
                            people, places or facts. <a href="#">Request for API</a></p>
                    </div>
                </form>`

            const content2 = `
        <div class="content">
         
        <div id="left_panel" class="nav bg-gray-100 fixed right-0 w-[20%] z-10 hidden md:h-screen  md:flex flex-col  ">
            <div class="profile flex justify-between w-[100%] bg-blue-700 h-[70px] py-3 px-3 sticky top-0">
                <div class="profileImage">
                    <img src="./assets/menus.svg"
                        class=" secmenu w-[40px] h-[40px] rounded-full border-white border-2 border-solid" alt="">
                </div>
                <div class="icons flex gap-4">
                   
                    <div class="menupannel h-[100vh] w-[90vw] bg-slate-400 fixed   left-0 top-0 p-3 hidden md:hidden">
                        <ul class="flex flex-col gap-3">

                        </ul>
                    </div>
                    <div class="secmenupannel h-[150px] w-[300px] bg-slate-400 fixed right-[20%] top-[1px] hidden drillox-menu"
                        id="drillox-menu">
                        <ul class="flex flex-col">
                            <li
                                class="p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Hidepannel</li>
                                <li
                                class="home  p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Home</li>
                                <li
                                class="  p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Education</li>
                            <li
                                class="p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                Log In</li>
                            <a href="#">
                                <li
                                    class="p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                    Get desktop assistant</li>
                            </a>
                            <a href="#">
                                <li
                                    class="p-2 bg-slate-400  h-[50px] border-2 border-solid border-slate-200  hover:bg-blue-500 text-white text-center hover:scale-105">
                                    Subscribe</li>
                                    
                            </a>
                        </ul>
                    </div>

                   
                  
                </div>
            </div>
            <div class="chatmenu flex md:block">
                <div class=" menuchats fixed left-0 z-40 w-[70vw] h-[100vh] bg-slate-400 top-0 z-5 hidden  h-screen md:static md:w-full h-max md:block z-0 md:bg-slate-100 drilloxValue"
                    id="chats">
                    <!--WHERE THE HISTORIES ARE KEPT-->

                </div>
            </div>

        </div>
        <div class=" fixed top-[45px]  w-screen bg-white  md:w-[57%] ">

            <div id="holder" for="earthenaOutputString"
                class="text overflow-auto p-2 w-screen md:w-[65%] m-auto  flex flex-col justify-between p-2 ">
                lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ullam assumenda natus a expedita? Soluta qui explicabo sunt accusamus eligendi similique. Amet, dolorum quaerat. Adipisci amet voluptatibus rem voluptatem quod cumque, dolorum, et laboriosam, possimus officiis incidunt explicabo. Deserunt nulla excepturi facilis quaerat asperiores. Dicta sunt perferendis ipsa fuga similique accusantium reiciendis ducimus, officiis rem sequi inventore! Sunt, delectus optio ipsum voluptate ipsam et illo doloribus quas saepe blanditiis nemo officiis ratione corporis illum alias, architecto fugiat nesciunt dolores molestias aperiam. Quod ab, harum voluptatem aliquam non aspernatur perferendis velit, alias, delectus odit deserunt. Autem delectus ex quaerat nemo harum vero, nesciunt explicabo labore quasi beatae similique. Nam odio blanditiis provident asperiores obcaecati accusamus quidem praesentium minima dolor? Eveniet rem molestiae qui architecto aliquam voluptatem et sapiente minus? Animi quae sit est! Ratione, impedit non. Illum facere soluta laborum fugiat tenetur iusto obcaecati reprehenderit, quidem a ad. Iusto, cum explicabo rerum iste dolorem laudantium eaque in eveniet, maiores adipisci excepturi aliquid sapiente facere reprehenderit vel voluptates tempore omnis repellat deleniti voluptatum delectus distinctio! Architecto, consequuntur. Laborum repudiandae, odio dolore dicta quaerat ea, consequuntur ex saepe in recusandae fuga laudantium iste vitae debitis officia et assumenda vero cupiditate, laboriosam nostrum odit. Temporibus deleniti beatae corrupti voluptatem? Facere veritatis laudantium, quis illum iste rerum quaerat placeat ullam veniam tempore quam voluptas, dolorem maxime, excepturi deserunt id ad ex! Pariatur iste totam ullam illum labore quis perferendis iusto! Voluptatum quisquam in nemo ex nulla tenetur quaerat nostrum, voluptates reiciendis esse ipsum itaque hic ad adipisci molestias optio ratione accusamus a nobis deleniti, non eum ipsam temporibus aut. Assumenda enim nesciunt ratione nemo molestiae! Amet quia in inventore saepe temporibus, tempore nihil aut culpa ipsum odit consequuntur ut architecto. Sed obcaecati explicabo sit placeat, tempora nihil dicta in libero sint numquam reiciendis illum quam culpa saepe blanditiis aperiam nobis iste ex doloremque quidem et tenetur nisi? Est distinctio id, autem quos incidunt odit libero molestiae, nostrum temporibus consectetur beatae, blanditiis pariatur dicta similique maiores veniam ab neque reprehenderit ducimus facilis dolorem. Fuga, porro consectetur laboriosam ducimus labore sit accusamus. Aliquam non ullam harum repellendus, dolores, magnam, maxime reiciendis recusandae deserunt voluptatem aspernatur repellat. Maxime, a voluptate aperiam, necessitatibus amet optio quae sed ut quod maiores dolores rerum at veniam fuga repudiandae consectetur, aliquam nemo illo expedita quasi consequatur delectus deserunt. Nulla ex libero delectus vitae placeat minus fuga numquam. Harum vel aliquam ullam fuga ab commodi libero, sed deserunt enim natus fugiat ut, neque excepturi mollitia accusamus magni blanditiis tenetur ipsa doloribus quia itaque? Quaerat culpa ut quam quasi aperiam reiciendis explicabo repellendus numquam illo! Deserunt excepturi aliquam officia voluptates quos dolor ea alias quisquam voluptatum incidunt iusto quis, distinctio maxime, vel eveniet, minus rerum impedit optio inventore ab. Aspernatur accusamus eius unde suscipit sit modi, doloremque necessitatibus quas officia aut, voluptatum ipsum! Veritatis dolorum esse, maxime sit unde asperiores nobis voluptatum eius rerum consequatur magni quia optio nemo error natus incidunt. Perferendis sapiente magnam fuga commodi eveniet rem quae asperiores ex, ipsam maiores aspernatur in architecto dolorum atque nesciunt suscipit corrupti earum natus. Corporis, neque. Inventore ipsa vero, illum ut sapiente nam optio repellendus dolores fugit vel. Reiciendis magni sapiente ea a laudantium eveniet exercitationem nesciunt cupiditate ratione voluptates repellat atque dolor ullam aspernatur in incidunt, sed nobis debitis porro illo! Tempora, eos eius cumque sapiente distinctio voluptate possimus laudantium dolorem itaque voluptatem a, inventore maxime laborum doloremque vero cupiditate. Commodi, obcaecati nobis ipsam neque, error voluptatum libero quidem tempora ducimus, hic aliquid voluptatem ipsum? Autem, recusandae? Beatae sequi a praesentium aut repudiandae quisquam accusamus temporibus. Impedit sed incidunt mollitia reprehenderit, nisi obcaecati in dolor, consequuntur quia, delectus esse harum molestias consectetur accusantium error molestiae suscipit asperiores ea architecto doloremque ducimus nobis debitis. Corporis iure dolores tenetur modi doloribus atque ut ipsam dolorum, harum quibusdam quisquam totam possimus inventore eligendi dolor consectetur labore at. Animi fugiat dignissimos sequi, at id dolore non, reiciendis velit hic, aspernatur exercitationem vel libero quo nostrum! Facere, nisi tenetur mollitia cum ab temporibus atque repellat dolores sunt amet quasi earum minus alias nostrum vitae modi, magnam fugit assumenda quaerat! Nisi qui explicabo, fugiat eligendi necessitatibus sunt quia voluptatum soluta, officia repudiandae esse molestias obcaecati pariatur perferendis cumque velit sed quam sint quaerat? Officia autem est deserunt, dolor saepe quos necessitatibus debitis accusamus eaque illum molestiae reiciendis, soluta ipsam iusto tempora eveniet, in doloremque cumque alias ducimus? Autem nesciunt deserunt rem odit nulla sint non magnam tempora enim perspiciatis, reprehenderit eligendi inventore velit vel dolor, ab at recusandae sequi nostrum omnis praesentium doloremque repellat blanditiis ducimus! Autem cum iure non aut dicta quaerat saepe magnam quibusdam praesentium. Sint ipsa consectetur consequatur ut aperiam necessitatibus repellendus! Vero soluta magnam quod recusandae sit molestias. Voluptatem unde cum maxime impedit amet omnis asperiores corrupti optio dignissimos, magni id perferendis reprehenderit nostrum. Officiis, hic rem nihil, itaque exercitationem id vitae, fugit doloremque rerum optio molestiae velit illo possimus vel facere eos magni quidem facilis! Esse natus amet quibusdam, culpa optio cupiditate nisi rem ad eligendi eos ipsam architecto inventore sit maiores sequi aliquam hic accusamus distinctio aliquid nemo dicta consequatur magni. Quia iusto, ipsam molestiae praesentium delectus deserunt vitae porro asperiores in, et dolor dolorum, eius iure autem ullam quaerat laborum explicabo est ratione nostrum beatae eum. Et laborum sint porro excepturi iure. Culpa distinctio ad alias iusto, est fugit. Provident unde sint commodi recusandae perferendis blanditiis esse placeat quaerat numquam! Praesentium corporis nostrum quae. Quisquam laboriosam odit cumque molestias necessitatibus saepe non laborum illum quos animi voluptatibus perferendis suscipit voluptatem, tenetur ipsam, culpa, distinctio vel provident earum dolores sed dolorum omnis aliquid. Distinctio asperiores iste unde, minus quia ipsam quas maxime fugit voluptatibus placeat! Id aliquam veritatis quibusdam molestias tempora eum, sunt nobis adipisci maiores ad, eligendi dolores sapiente consequatur est aspernatur neque. Incidunt corrupti est, quod, officiis rerum, labore atque quia harum velit explicabo dicta sit earum. Reiciendis deleniti mollitia ipsam quasi consectetur. Ad eos porro suscipit, animi incidunt nam, iusto sunt illum et quasi mollitia dolore quis vel consequatur consequuntur optio dignissimos omnis. Totam a asperiores facere velit, possimus praesentium doloribus qui, est, perferendis ullam eum ipsa cum adipisci id fuga aliquid. Id quibusdam doloribus nostrum, nihil molestiae aliquid similique quisquam pariatur deleniti, atque exercitationem autem corrupti voluptates iusto. Nesciunt quam rem maiores doloremque pariatur eveniet expedita explicabo nemo a! Voluptas dolore illo, alias quis id praesentium quasi illum provident est at, quo nam sapiente error. Vero cumque pariatur, modi, vel, porro dolore impedit id mollitia sunt saepe expedita. Facilis quia, ipsa doloremque velit culpa iste nulla neque sed optio numquam fuga possimus. Omnis accusantium, non quod provident, dolorum aut cupiditate architecto quasi voluptatibus aliquam veritatis possimus soluta velit reiciendis rerum laboriosam repudiandae. Sit deleniti cupiditate dolores voluptates quisquam aliquid soluta qui? Esse dolor tempore suscipit accusamus, impedit aliquid neque illo similique asperiores corporis delectus ducimus temporibus architecto fugiat fugit quo tempora. Molestiae nesciunt nisi facere repudiandae qui dolores porro vero nihil earum assumenda provident tempora, eum illo natus mollitia, non eius culpa incidunt ratione quisquam repellat voluptatibus velit quis adipisci! Dolores cumque laborum magni, fugiat quod dolorum id amet quam ipsa labore numquam quia repellendus culpa facilis possimus incidunt consectetur beatae cupiditate officia in voluptatum. Accusamus nostrum, expedita distinctio qui eveniet rem neque sapiente excepturi accusantium perferendis dolore deserunt illum molestiae recusandae magnam non minus beatae id aliquam eius pariatur numquam ipsum veritatis nisi! Eligendi reiciendis dolor quos temporibus illo quasi adipisci, minima accusantium quis incidunt veritatis inventore dicta impedit quam iure obcaecati repudiandae dolorem illum. Cum voluptates voluptatem tempore fugiat deserunt recusandae nobis? Magni, aspernatur cum aliquid rem, ex fugit at corrupti suscipit neque distinctio qui perferendis. Inventore explicabo pariatur iste, id placeat ad. Laudantium necessitatibus rem repellat earum quidem pariatur quaerat eligendi hic! Architecto in, illum illo molestiae quia sequi. Cupiditate atque sapiente, ratione dolorum voluptatibus dolorem earum numquam illum sunt, deserunt similique nobis. Repudiandae impedit qui ab. Dolorum, architecto! Ad repellat adipisci veritatis rem consequatur eum in ex! Iusto id porro debitis facilis voluptate adipisci, in voluptatibus amet eius quas quaerat autem, sequi explicabo nemo neque eligendi ex repudiandae inventore! Iusto quaerat dolorem aspernatur quia aliquam earum minima reprehenderit consequuntur aut. Officiis sunt asperiores optio possimus recusandae ducimus qui nam ut earum ex delectus quasi expedita voluptates quisquam consectetur harum accusamus, vero molestias dolores eius quaerat eos eaque quibusdam facere. Illo soluta magni culpa, sit ut placeat dicta asperiores. Sequi quis animi rem voluptatibus recusandae sapiente modi tempore quidem? Animi placeat qui, architecto sapiente modi sequi cum, error, at autem magni saepe unde excepturi harum dolorum iure hic eum quidem omnis? Iste fugit quibusdam veritatis atque corporis, incidunt voluptatum consequatur sed accusamus nemo voluptas, odit hic perferendis optio blanditiis delectus! Eos sint dignissimos, voluptatem dolore qui quam tenetur veritatis saepe, cum dolorem quasi vitae corrupti earum sapiente numquam consectetur quisquam accusamus unde, corporis praesentium quae hic voluptates molestias? Quae animi sit ex error delectus, magnam maxime accusantium aliquid similique voluptatibus vitae sequi quos! Laboriosam atque ullam ex iusto nemo omnis laudantium temporibus modi laborum culpa placeat voluptatem mollitia, illo sit incidunt, iure, ipsum ut dolores deleniti beatae! A in labore, dolores rerum aliquam nemo illo explicabo. Voluptatibus facere cumque numquam non doloremque quo neque, nobis repudiandae. Magni magnam ea, qui soluta molestiae enim animi labore sunt repellendus quis consequatur, in itaque unde? Quibusdam officia nulla quos recusandae tempora excepturi laborum molestias repellendus incidunt ea aut mollitia, totam culpa ex in dolorum. Dolor praesentium accusamus ut inventore voluptatum. Cumque dolore commodi aperiam ab dignissimos corporis. Quia alias reiciendis enim, ab sint eaque pariatur perspiciatis odit amet deserunt impedit expedita explicabo doloribus possimus molestias, esse incidunt autem consequuntur dignissimos, laboriosam exercitationem animi maxime illo. Optio voluptatum nostrum exercitationem, eligendi voluptates eveniet repudiandae porro nam aspernatur iste tenetur omnis libero obcaecati similique, dignissimos accusamus rerum quam eius! Id saepe quo iusto delectus iste consequuntur ut doloribus odit molestiae possimus, quisquam ea laborum excepturi inventore non officiis sed atque corrupti. Alias dolorum corporis fugit! A id maxime officiis minus magnam minima necessitatibus, fugit quidem dicta similique tempora cum voluptas harum nulla eveniet consequatur placeat, reiciendis ea esse sapiente aliquid, voluptates ex. Blanditiis, facere illum animi maxime nisi, praesentium enim tempore minima, asperiores nesciunt ullam autem nulla adipisci eius pariatur reprehenderit! Laboriosam voluptatibus rerum velit? Iste magni fugiat animi non delectus rerum nam asperiores impedit aut autem qui facilis quod accusamus recusandae atque dolores reiciendis, officia tenetur eligendi laudantium porro similique ea vitae. Beatae, exercitationem numquam autem eos dolorum omnis animi porro quos, deleniti quibusdam accusamus. Modi, doloremque in, qui consectetur ex aliquam minima aliquid corporis tenetur pariatur autem quisquam sunt a vitae explicabo deleniti necessitatibus nostrum culpa dolorum nam ab at fugit, laudantium fugiat! Aspernatur ut illum minima sit commodi repudiandae excepturi numquam quam, fugiat quo iure debitis vitae atque molestiae, accusantium a exercitationem quos inventore autem delectus tempore? Quis blanditiis velit perferendis illo dignissimos, doloremque veritatis reprehenderit natus quas, cum officia labore illum molestias deserunt alias explicabo quisquam expedita vero quod nisi similique! Impedit culpa magnam iste eligendi pariatur optio architecto magni sint ullam expedita excepturi laboriosam praesentium odio ipsa veritatis, adipisci recusandae similique quod sunt consequuntur nostrum, reprehenderit officia! Voluptatum voluptatibus praesentium earum numquam expedita harum aliquid accusantium asperiores. Aut quos qui optio ullam molestias. Porro beatae architecto delectus exercitationem officiis? Reprehenderit inventore, fugiat deleniti nam dolore tempore iste nostrum doloremque vel illo earum commodi, eaque ex sint vitae enim. Labore exercitationem neque est fuga facere expedita eius placeat corporis atque, dignissimos minus earum repellat. Reiciendis, accusamus cumque! Repellendus ullam non tenetur exercitationem minus. Reprehenderit iusto perferendis commodi, explicabo voluptatem ducimus alias molestias. Mollitia nostrum, ipsa debitis exercitationem nulla vitae harum delectus officia autem fuga quisquam non accusamus est recusandae repellendus, aut saepe qui fugit cumque culpa repudiandae sequi et accusantium? Similique accusantium saepe sint fugit libero quisquam, eius atque itaque beatae cupiditate earum soluta possimus fugiat laborum odio minima, dicta dolores quia corporis necessitatibus excepturi. Non sed exercitationem aperiam illum, accusamus sit provident tenetur molestiae in, facere totam consequuntur quas fugiat sint esse libero corporis laudantium. Laudantium.


             </div>

        </div>
     

        <div class="inputfield flex flex-col gap-2 fixed bottom-0 w-screen bg-white  md:w-[60%] ">
                <form for="earthenaInputString" action="" method="get"
                    class="field -z-3 w-screen md:w-[70%] m-auto flex flex-col justify-between p-2">
                    <div id="recommends" class="hidden md:grid grid-cols-2 gap-3 w-[90%] mb-[5px] ">
                        
                        <div class="h-[50px] bg-[#f0f0f0]">

                            <p>Video call me.</p>

                        </div>
                        <div class="h-[50px] w-[100%] items-center bg-[#f0f0f0] p-2">

                            <p class="m-auto">Transoform my image into cartoon.</p>

                        </div>
                    </div>
                    <div id="userIO" class=" w-full md:w-[90%] flex items-center border border-blue-500 py-2">
                        <svg class="inputpannelIcon fill-blue-500 m-2 md:hidden " xmlns="http://www.w3.org/2000/svg"
                            height="40" viewBox="0 -960 960 960" width="30">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>
                        <div
                            class="inputpannel absolute -top-16 bg-slate-200 p-2 hidden md:flex items-center md:static md:bg-white ">
                            <button id="btn" onclick=""><img
                                    class="ml-2 h-10 w-10 transform transition-transform hover:scale-110 drilloxBtn"
                                    src="mic_ico.png"></button>
                            <button id="btn" onclick=""><img
                                    class="ml-2 h-10 w-10 transform transition-transform hover:scale-110 drilloxBtn"
                                    src="video_ico.png"></button>
                        </div>

                        <input id="earthenaInputString" onkeypress="pressed(this)"
                            class="appearance-none bg-transparent border-none w-[90%] text-gray-700 ml-4 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="Send a message..." aria-label="Full name">
                        <button id="sendToEarthenaButton" onclick="sendMessage(); sendDataToPHP();"><img
                                class="h-10 w-10 transform transition-transform hover:scale-110 pr-2"
                                src="send_ico.png"></button>
                    </div>
                    <div id="copyright" class="copyright bg-slate-300 w-[90%]  my-[10px] hidden md:block">

                        <p class="text-black text-center"><a href="#">Submit querry.</a> Earthena may produce inacurate
                            information about
                            people, places or facts. <a href="#">Request for API</a></p>
                    </div>
                </form>
                </div>`

            const content3 = ` <div id="holder" for="earthenaOutputString"
                class="text overflow-auto p-2 pt-1 pb-[150px] md:w-[55%]  md:ml-[20%] pb-[150px] scroll-content">
                lorem2000
             </div>


        <div class="inputfield flex flex-col gap-2 fixed bottom-0 w-screen bg-white  md:w-[60%] ">
                <form for="earthenaInputString" action="" method="get"
                    class="field -z-3 w-screen md:w-[70%] m-auto flex flex-col justify-between p-2">
                    <div id="recommends" class="hidden md:grid grid-cols-2 gap-3 w-[90%] mb-[5px] ">
                        <div class="h-[50px] bg-[#f0f0f0] p-2">

                            <p>Sing me a song.</p>

                        </div>
                        <div class="h-[50px] bg-[#f0f0f0] py-2">

                            <p>Write me a job application letter.</p>

                        </div>
                        <div class="h-[50px] bg-[#f0f0f0]">

                            <p>Video call me.</p>

                        </div>
                        <div class="h-[50px] w-[100%] items-center bg-[#f0f0f0] p-2">

                            <p class="m-auto">Transoform my image into cartoon.</p>

                        </div>
                    </div>
                    <div id="userIO" class=" w-full md:w-[90%] flex items-center border border-blue-500 py-2">
                        <svg class="inputpannelIcon fill-blue-500 m-2 md:hidden " xmlns="http://www.w3.org/2000/svg"
                            height="40" viewBox="0 -960 960 960" width="30">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>
                        <div
                            class="inputpannel absolute -top-16 bg-slate-200 p-2 hidden md:flex items-center md:static md:bg-white ">
                            <button id="btn" onclick=""><img
                                    class="ml-2 h-10 w-10 transform transition-transform hover:scale-110 drilloxBtn"
                                    src="mic_ico.png"></button>
                            <button id="btn" onclick=""><img
                                    class="ml-2 h-10 w-10 transform transition-transform hover:scale-110 drilloxBtn"
                                    src="video_ico.png"></button>
                        </div>

                        <input id="earthenaInputString" onkeypress="pressed(this)"
                            class="appearance-none bg-transparent border-none w-[90%] text-gray-700 ml-4 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text" placeholder="Send a message..." aria-label="Full name">
                        <button id="sendToEarthenaButton" onclick="sendMessage(); sendDataToPHP();"><img
                                class="h-10 w-10 transform transition-transform hover:scale-110 pr-2"
                                src="send_ico.png"></button>
                    </div>
                    <div id="copyright" class="copyright bg-slate-300 w-[90%]  my-[10px] hidden md:block">

                        <p class="text-black text-center"><a href="#">Submit querry.</a> Earthena may produce inacurate
                            information about
                            people, places or facts. <a href="#">Request for API</a></p>
                    </div>
                </form> <button onclick="sendMessage(); sendDataToPHP();"> clicking</button>`


                
 let resp=object1.response1;
 let req=object1.request1;                
                // Your JavaScript function that constructs and sends the data
function sendDataToPHP(resp,resp) {
     

  // Assume you want to get the text content of the created elements
  let responseData = resp;
  let requestData = req;

  // Construct the data object
  let dataToSend = {
    response: responseData,
    request: requestData
  };

  // Use Fetch API to send data to PHP script
  fetch('index.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(dataToSend)
  })
    .then(response => response.json())
    .then(data => {
      // Handle the response from PHP if needed
      console.log(data);
    })
    .catch(error => {
      console.error('Error:', error);
    });
}


            document.querySelector(".education").addEventListener("click", function () {
                document.querySelector(".content").innerHTML = content2
                let counter4 = 0;
                let counter5 = 0;
                window.addEventListener("click", (e) => {

                    if (!document.querySelector(".secmenupannel").classList.contains("hidden")) {

                        if (!e.target.classList.contains("secmenupannel")) {
                            if (counter4 == 1) {
                                document.querySelector(".secmenupannel").classList.add("hidden")
                                counter4 = 0;
                            } else {
                                counter4++
                            }
                        }

                    }

                })
                window.addEventListener("click", (e) => {

                    if (!document.querySelector(".sidepannel").classList.contains("hidden")) {

                        if (!e.target.classList.contains("sidepannel")) {
                            if (counter5 == 1) {
                                document.querySelector(".sidepannel").classList.add("hidden")
                                counter5 = 0;
                            } else {
                                counter5++
                            }
                        }

                    }

                })
                document.querySelector(".secmenu").addEventListener("click", function () {
                    if (document.querySelector(".secmenupannel").classList.contains("hidden")) {
                        document.querySelector(".secmenupannel").classList.remove("hidden")
                    } else {
                        document.querySelector(".secmenupannel").classList.add("hidden")
                    }
                })
                document.querySelector(".sidepannel").addEventListener("click", function () {
                    if (document.querySelector(".sidepannel").classList.contains("hidden")) {
                        document.querySelector(".sidepannel").classList.remove("hidden")
                    } else {
                        document.querySelector(".sidepannel").classList.add("hidden")
                    }
                })
            })
            document.querySelector(".home").addEventListener("click", function () {
                document.querySelector(".content").innerHTML = contentone

            })
            document.querySelector(".health").addEventListener("click", function () {
                document.querySelector(".main").innerHTML = contentone
            })
            function marginListner() {
                const hold = document.querySelector("#holder")
                const imputfieldchat = document.querySelector(".inputfield").offsetHeight;
                const main = document.querySelector(".main").offsetHeight;
                let calhieght = main - imputfieldchat;
                hold.classList.add(`h-[${calhieght - 100}px]`)
                console.log(calhieght - 500)

            }
            marginListner()
            window.addEventListener("resize", marginListner)
            setInterval(marginListner, 10)

            const recommendations = document.getElementById("recommends");
            const input = document.getElementById("earthenaInputString")

            recommendations.childNodes.forEach((element) => {
                element.addEventListener("click", (event) => {
                    const paragraph = element.children[0];
                    input.value = paragraph.textContent

                    sendMessage()
                })
            })

            input.addEventListener("keypress", (event) => {
                if (event.keyCode === 13) {
                    event.preventDefault();

                    sendMessage()
                }
            })



            function pressed(event) {

            }

            const toggleButton = document.getElementById('toggleButton');
            const myDiv = document.getElementById('left_panel');
            const toggleReveal = document.getElementById('toggleReveal');

            toggleButton.addEventListener('click', function () {
                if (myDiv.classList.contains('hidden')) {
                    myDiv.classList.remove('hidden');
                } else {
                    myDiv.style.display = "hidden";
                    toggleReveal.classList.remove('hidden');
                }
            });

            toggleReveal.addEventListener('click', function () {
                myDiv.style.visibility = "visible";
                myDiv.classList.remove('invisible');
                toggleReveal.classList.add('hidden');
            });



            function sendMessage() {
                const inputString = document.getElementById("earthenaInputString").value;
                const inputElement = document.getElementById("earthenaInputString");

                //const outputString = document.getElementById("earthenaOutputString");
                const sendButton = document.getElementById("sendToEarthenaButton");
                sendButton.disabled = true;

                //drillox added work
                const holder = document.getElementById("holder");
                // const holder = document.querySelector("#holder");
                 let response = document.createElement('p');
                 let request = document.createElement('p');
                let requestDiv = document.createElement('div');









                requestDiv.style = "text-align:right";

                response.className = "bg-slate-300 p-3";
                response.style = "border-radius: 0px 20px 20px 20px; margin:10px 0px 10px 0px;";

                request.className = "bg-blue-500 p-3 inline-block text-right ";
                request.style = "border-radius: 20px 0px 20px 20px; margin:10px 0px 10px 0px;";
                request.textContent = inputString;

                requestDiv.appendChild(request)
                holder.appendChild(requestDiv)
                holder.appendChild(response)


                // Printing speed and delay
                const chunkSize = 1;
                const delay = 10;

                // Specify the server's IP address and port
                const serverIP = '4taq.c.serverhost.name'; // Replace with the actual server IP address
                const serverPort = '8090'; // Replace with the actual server port

                const xhr = new XMLHttpRequest();
                xhr.open("GET", `https://${serverIP}:${serverPort}/append?string=${inputString}`, true);
                inputElement.value = "";
                document.getElementById("recommends").style.display = "none";
                document.getElementById("copyright").style.visibility = "hidden";

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const responseText = xhr.responseText;
                        printCharactersWithDelay(responseText, response, chunkSize, delay);
                        sendButton.disabled = false;
                        drilloxPrints(inputString)
                    }
                };

                xhr.send();

                const response1 =response.innerHTML;
                const request1 =request.innerHTML;

            return object1={response1,request1} ;
            }


            function printCharactersWithDelay(text, element, chunkSize, delay) {
                let index = 0;

                function printChunk() {
                    if (index < text.length) {
                        element.textContent += text.substring(index, index + chunkSize);
                        index += chunkSize;
                        setTimeout(printChunk, delay);
                    }
                }

                printChunk();
            }

            function drilloxPrints(input) {
                const holder = document.getElementById("holder");
                const chatSessionHolder = document.getElementById("chats")

                let temp = `<div class="chat flex justify-between gap-2 p-2 m-2 bg-slate-300 "><svg onclick="lerts(true,false)" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m648-140 112-112v92h40v-160H640v40h92L620-168l28 28Zm-448 20q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v268q-19-9-39-15.5t-41-9.5v-243H200v560h242q3 22 9.5 42t15.5 38H200Zm0-120v40-560 243-3 280Zm80-40h163q3-21 9.5-41t14.5-39H280v80Zm0-160h244q32-30 71.5-50t84.5-27v-3H280v80Zm0-160h400v-80H280v80ZM720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40Z"/></svg><span>${input}</span><svg xmlns="http://www.w3.org/2000/svg" onclick="lerts(false,true)" height="24" viewBox="0 -960 960 960" width="24"><path d="m376-300 104-104 104 104 56-56-104-104 104-104-56-56-104 104-104-104-56 56 104 104-104 104 56 56Zm-96 180q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520Zm-400 0v520-520Z"/></svg></div>`;

                if (holder.children.length == 2) {
                    chatSessionHolder.innerHTML += temp
                }
            }




            document.querySelector(".profileImage").addEventListener("click", function () {
                if (document.querySelector(".profilepannel").classList.contains("hidden")) {
                    document.querySelector(".profilepannel").classList.remove("hidden")

                } else {
                    document.querySelector(".profilepannel").classList.add("hidden")
                }
            })



            //--top
            function menuchat() {
                let dropdownchats = document.querySelector('.menuchats').classList;
                if (dropdownchats.contains('hidden')) {
                    dropdownchats.remove('hidden');
                    dropdownchats.add('block');
                }
                else {
                    dropdownchats.remove('block');
                    dropdownchats.add('hidden');
                }
            }

            //------bottom
            document.querySelector(".inputpannelIcon").addEventListener("click", function () {
                if (document.querySelector(".inputpannel").classList.contains("hidden")) {
                    document.querySelector(".inputpannel").classList.remove("hidden")
                } else {
                    document.querySelector(".inputpannel").classList.add("hidden")
                }
            })



            //no touching
            let counter = 0;
            let counter2 = 0;
            let counter3 = 0;
            let dropdownchats = document.querySelector('.menuchats')
            let down = document.querySelector(".inputpannel")

            window.addEventListener("click", (event) => {
                if (!document.querySelector(".profilepannel").classList.contains("hidden")) {

                    const allList = ["Log in", "Get desktop assistant", "Subscribe"]

                    if (!allList.includes(event.srcElement.innerHTML)) {
                        if (counter == 1) {
                            document.querySelector(".profilepannel").classList.add("hidden")
                            counter = 0
                        } else {
                            counter++;
                        }
                    }
                }


                //for the bottom


                if (!document.querySelector(".inputpannel").classList.contains("hidden")) {

                    if (!event.target.classList.contains("drilloxBtn")) {
                        if (counter2 == 1) {
                            document.querySelector(".inputpannel").classList.add("hidden")
                            counter2 = 0;
                        } else {
                            counter2++
                        }
                    }

                }


                //for the top
                let dropdownchats = document.querySelector('.menuchats').classList;
                if (!dropdownchats.contains('hidden')) {
                    if (!event.target.classList.contains("drilloxValue")) {
                        if (counter3 == 1) {
                            dropdownchats.remove('block');
                            dropdownchats.add('hidden');
                            counter3 = 0;
                        } else {
                            counter3++
                        }
                    }
                }


            })


            //--
            document.querySelector(".unvealNavigator").addEventListener("click", function () {
                if (myDiv.classList.contains('hidden')) {
                    myDiv.classList.remove('hidden');
                    console.log("hidden")


                } else {
                    document.querySelector(".unvealNavigator").classList.add("bg-blue-500")
                    document.querySelector(".profilepannel").classList.add("hidden")
                    let counter = 0;
                    function min() {
                        if (counter == 0) {
                            myDiv.classList.add("drilloxHide")
                            counter++;
                            setTimeout(min, 50)
                        } else {
                            myDiv.style.visibility = "hidden";
                            myDiv.classList.remove("drilloxHide")
                        }
                    }

                    min()

                    toggleReveal.classList.remove('hidden');

                }
            })

            // This is for the Dialogs
            const OpenLoginLink = document.getElementById("OpenLoginDialog");
            const OpenRegisterLink = document.getElementById("OpenRegisterDialog");
            const CloseLoginLink = document.getElementById("CloseLoginDialog");
            const CloseRegisterLink = document.getElementById("CloseRegisterDialog");
            const LoginDialog = document.getElementById("LoginDialog");
            const RegisterDialog = document.getElementById("RegisterDialog");

            OpenLoginLink.addEventListener("click", () => {
                LoginDialog.classList.remove("hidden");
            });

            OpenRegisterLink.addEventListener("click", () => {
                LoginDialog.classList.add("hidden")
                RegisterDialog.classList.remove("hidden");

            })

            CloseLoginLink.addEventListener("click", () => {
                LoginDialog.classList.add("hidden");
            });

            CloseRegisterLink.addEventListener("click", () => {
                RegisterDialog.classList.add("hidden");
            })




        </script>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>





<?php
// Retrieve data from the POST request
$data = json_decode(file_get_contents('php://input'), true);

if ($data === null) {
    // Check for JSON decoding errors
    echo "Error decoding JSON: " . json_last_error_msg();
    exit;
}

// Rest of your code


// Access individual values
$responseValue = $data['response'];
$requestValue = $data['request'];

echo $responseValue;

echo $requestValue;

// Now you can use $responseValue and $requestValue in your PHP logic
// For example, you can save them to a database, perform some processing, etc.

// Send a response back to JavaScript (optional)


$responseToJS = [ $requestValue  =>   $responseValue];
echo json_encode($responseToJS);


?>
