<header>
    <nav class="container mx-auto relative">
        <div class="gap-5 flex flex-col lg:flex-row  ">
            
            <div class="items-center  flex gap-6  justify-between  px-4 py-4 lg:py-0">
                <div>
                    <a href="#" class="uppercase font-semibold text-white ">
                      <img src="assets/logo.svg" alt="">
                    </a>
                </div>
                <div>
                  <button onclick="menu()" class="text-white focus:outline-none  block lg:hidden ">
                      <img class="w-5 h-5" src="assets/menu-phone.png" alt="">
                  </button>
              </div>
            </div>
            <div id="myMenu" class="max-sm:z-10 max-sm:right-0 max-sm:absolute max-sm:pb-14 max-sm:pt-14 flex gap-6 flex-col w-full max-sm:top-14 lg:flex-row justify-between max-sm:hidden max-sm:bg-white ">
                <ul class="menu max-sm:items-start gap-6 items-center lg:flex-row  flex flex-col max-sm:pl-5">
                  <li><a href="#" class="active max-sm:hover:no-underline">Home</a></li>
                  <li class="max-sm:w-full li-drop max-sm:overflow-hidden">
                      <div class="max-sm:hover:bg-primary max-sm:cursor-pointer max-sm:hover:text-black max-sm:outline-none dropdown-btn flex gap-3 max-sm:justify-between">
                          <div>
                              <a href="#" class="max-sm:hover:text-black max-sm:hover:bg-primary ">About</a>
                          </div>
                          <div class="justify-center flex">
                              <button>
                                  <img class="w-3" src="assets/drop.png" alt="">
                              </button>
                          </div>
                      </div>   
                      <ul class="submenu max-sm:sticky max-sm:hidden ">
                          <li><a class="hover:text-white" href="#">Visi</a></li>
                          <li><a class="hover:text-white" href="#">Misi</a></li>
                          <li><a class="hover:text-white" href="#">Profil</a></li>
                          <li><a class="hover:text-white" href="#">Our Team</a></li>
                      </ul>
                  </li>
                  <li><a href="#" class="max-sm:hover:text-white block max-sm:hover:bg-primary">Services</a></li>
                 <li class="li-drop max-sm:overflow-hidden max-sm:w-full">
                      <div class="dropdown-btn flex gap-3 max-sm:justify-between max-sm:cursor-pointer max-sm:outline-none max-sm:hover:bg-primary max-sm:hover:text-black">
                          <div>
                              <a href="#" class="max-sm:hover:text-black block max-sm:hover:bg-primary">Our Work</a>
                          </div>
                          <div class="flex justify-center">
                              <button>
                                  <img class="w-3" src="assets/drop.png" alt="">
                              </button>
                          </div>
                      </div>
                      <ul class="submenu max-sm:sticky max-sm:hidden">
                          <li><a class="hover:text-white" href="#">Portfolio</a></li>
                          <li><a class="hover:text-white" href="#">Study Cases</a></li>
                      </ul>
                  </li>
                  <li><a href="#" class="max-sm:hover:bg-primary max-sm:hover:text-white">Blog</a></li>
                  <li><a href="#" class="max-sm:hover:bg-primary max-sm:hover:text-white">Resource</a></li>
                  <li><a href="#" class="max-sm:hover:bg-primary max-sm:hover:text-white">Contact</a></li>
                </ul>
                
                <div id="Search"class="align-center items-center flex justify-center absolute top-[-20px] hidden bg-cover bg-cyan-400 w-full h-20 z-20 ">
                  <div class="flex justify-center items-center pt-7">
                      <button onclick="search()">
                          <img class="bg-white pt-px pr-2 pl-0.5 pb-1" src="assets/search.svg" alt="">
                      </button>
                      <input class="flexitems-center justify-center align-center border-hidden mt-px w-2/5"
                          type="text" placeholder="Mau cari apa?">
                      <button onclick="search()">
                          <img class="h5 ml-8 w-5" src="assets/close.png" alt="">
                      </button>
                  </div>
              </div>

                <div class="gap-6 items-center justify-center flex flex-col lg:flex-row max-sm:mt-3">
                    <div class="max-sm:absolute max-sm:top-[-32px] max-sm:right-14 z-10">
                        <button onclick="search()">
                            <img src="assets/search.svg" alt="">
                        </button>
                    </div>

                <button id="btnNav" class="button-primary">Get Started</button>
                  <div id="popup" class="hidden z-30 pt-[50px] left-0 top-0 w-full h-full overflow-auto fixed ">
                    <div class="p-20 border-2 bg-white m-auto w-4/5">
                      <button id="close" class="close float-right">
                        <img class="w-5 h-5" src="assets/close.png" alt="">
                      </button>       
                          <div class="pt-4 gap-4 text-center w-full mx-auto grid grid-rows-2 grid-flow-col ">
                            <div class="item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 flex flex-wrap items-center justify-center bg-[#ffffff]">
                              <div class="w-[150px] py-10">
                                <img src="assets/logo shopify.png" alt="" />
                              </div>
                              <h1 class="font-extrabold text-lg">Shopify Theme Development</h1>
                              <p class="py-4 text-sm ">Start from 700 USD for project base or 35 USD per hour</p>
                            </div>
                  
                            <div class="flex flex-wrap items-center justify-center bg-[#ffffff] item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 ">
                              <div class="w-[150px] py-10">
                                <img src="assets/world_press.png" alt="" />
                              </div>
                              <h1 class="font-extrabold text-lg">WordPress Theme Development</h1>
                              <p class="py-4 text-sm ">Start from 600 USD for project base or 35 USD per hour</p>
                            </div>
                            
                            <div class="item px-8 py-2 rounded shadow-lg shadow-indigo-500/40 flex flex-wrap items-center justify-center bg-[#ffffff]">
                              <div class="w-[100px] h-[100px] py-10">
                                <img src="assets/php.png" alt="" />
                              </div>
                              <h1 class="font-extrabold text-lg">Web Application Development</h1>
                              <p class="py-4 text-sm ">Start from 1000 USD for project base or 35 USD per hour</p>
                            </div>
                            
                            <div class="justify-center bg-[#ffffff] shadow-indigo-500/40 flex flex-wrap item px-8 py-2 rounded shadow-lg items-center">
                              <div class="w-[150px] py-10">
                                <img src="assets/www.png" alt="" />
                              </div>
                              <h1 class="font-extrabold text-lg">Custom App/Plugins Development</h1>
                              <p class="py-4 text-sm ">Start from 300 USD for project base or 35 USD per hour</p>
                            </div>
                  
                            <div class=" shadow-lg justify-center bg-[#ffffff] shadow-indigo-500/40 flex flex-wrap items-center item px-8 py-2 rounded">
                              <div class="w-[100px] py-10">
                                <img src="assets/assistans.png" alt="" />
                              </div>
                              <h1 class="font-extrabold text-lg">Assistans Services</h1>
                              <p class="py-4 text-sm ">Start from 33 USD for project base or 35 USD per hour</p>
                            </div>
                  
                            <div class="rounded shadow-lg item px-8 py-2 flex flex-wrap items-center shadow-indigo-500/40 justify-center bg-[#ffffff]">
                              <h1 class="font-bold text-slate-600 px-10 mt-10">More Services :</h1>
                              <div class="pt-10 font-bold">
                                <p>Technical Assistans</p>
                                <p>Support Assistans</p>
                                <p>VIP Assistans</p>
                                <p>Social Media Admin</p> 
                              </div>        
                            </div>
                          </div>            
                        </div>
                      </div>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    </header>