@extends('layouts.app')

@section('content')
    <main class="h-full overflow-y-auto  max-w-full  pt-4">
        <div class="container full-container py-5 flex flex-col gap-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                <div class="col-span-2">
                    <div class="card h-full">
                        <div class="card-body">
                            <h4 class="t">Recent Transaction</h4>
                            <div class="relative overflow-x-auto">
                                <!-- table -->
                                <table class="text-left w-full whitespace-nowrap text-sm">
                                    <thead class="text-gray-700">
                                        <tr class="font-semibold text-gray-600">
                                            <th scope="col" class="p-4">Id</th>
                                            <th scope="col" class="p-4">Assigned</th>
                                            <th scope="col" class="p-4">Name</th>
                                            <th scope="col" class="p-4">Priority</th>
                                            <th scope="col" class="p-4">Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-4 font-semibold text-gray-600 ">1</td>
                                            <td class="p-4">
                                                <div class="flex flex-col gap-1">
                                                    <h3 class=" font-semibold text-gray-600">Sunil Joshi
                                                    </h3>
                                                    <span class="font-normal text-gray-500">Web
                                                        Designer</span>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <span class="font-normal  text-gray-500">Elite Admin</span>
                                            </td>
                                            <td class="p-4">
                                                <span
                                                    class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold bg-blue-600 text-white">Low</span>
                                            </td>
                                            <td class="p-4">
                                                <span class="font-semibold text-base text-gray-600">$3.9</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 font-semibold text-gray-600 ">2</td>
                                            <td class="p-4">
                                                <div class="flex flex-col gap-1">
                                                    <h3 class="font-semibold text-gray-600">Andrew
                                                        McDownland</h3>
                                                    <span class="font-normal text-gray-500">Project
                                                        Manager</span>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <span class="font-normal text-gray-500">Real Homes WP
                                                    Theme</span>
                                            </td>
                                            <td class="p-4">
                                                <span
                                                    class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold text-white bg-cyan-500">Medium</span>
                                            </td>
                                            <td class="p-4">
                                                <span class="font-semibold text-base text-gray-600">$24.5k</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 font-semibold text-gray-600 ">3</td>
                                            <td class="p-4">
                                                <div class="flex flex-col gap-1">
                                                    <h3 class="font-semibold text-gray-600">Christopher
                                                        Jamil</h3>
                                                    <span class="font-normal text-sm text-gray-500">Project
                                                        Manager</span>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <span class="font-normal text-gray-500">MedicalPro WP
                                                    Theme</span>
                                            </td>
                                            <td class="p-4 ">
                                                <span
                                                    class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold text-white bg-red-500">High</span>
                                            </td>
                                            <td class="p-4">
                                                <span class="font-semibold text-base text-gray-600">$12.8k</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 font-semibold text-gray-600 ">4</td>
                                            <td class="p-4">
                                                <div class="flex flex-col gap-1">
                                                    <h3 class="font-semibold text-gray-600">Nirav Joshi
                                                    </h3>
                                                    <span class="font-normal text-sm text-gray-500">Frontend
                                                        Engineer</span>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <span class="font-normal text-sm text-gray-500">Hosting
                                                    Press HTML</span>
                                            </td>
                                            <td class="p-4">
                                                <span
                                                    class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold text-white bg-teal-500">Critical</span>
                                            </td>
                                            <td class="p-4">
                                                <span class="font-semibold text-base text-gray-600">$2.4k</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 gap-6">
                <div class="card overflow-hidden">
                    <div class="relative">
                        <a href="javascript:void(0)">
                            <img src="./assets/images/products/product-1.jpg" alt="product_img" class="w-full">
                        </a>
                        <a href="javascript:void(0)"
                            class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                            <i class="ti ti-basket text-base"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="text-base font-semibold text-gray-600 mb-1">Boat Headphone</h6>
                        <div class="flex justify-between">
                            <div class="flex gap-2 items-center">
                                <h6 class="text-base text-gray-600 font-semibold">$50</h6>
                                <span class="text-gray-500 text-sm">
                                    <del>$65</del>
                                </span>
                            </div>
                            <ul class="list-none flex gap-1">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="relative">
                        <a href="javascript:void(0)">
                            <img src="./assets/images/products/product-2.jpg" alt="product_img" class="w-full">
                        </a>
                        <a href="javascript:void(0)"
                            class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                            <i class="ti ti-basket text-base"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="text-base font-semibold text-gray-600 mb-1">MacBook Air Pro</h6>
                        <div class="flex justify-between">
                            <div class="flex gap-2 items-center">
                                <h6 class="text-base text-gray-600 font-semibold">$650</h6>
                                <span class="text-gray-500 text-sm">
                                    <del>$900</del>
                                </span>
                            </div>
                            <ul class="list-none flex gap-1">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="relative">
                        <a href="javascript:void(0)">
                            <img src="./assets/images/products/product-3.jpg" alt="product_img" class="w-full">
                        </a>
                        <a href="javascript:void(0)"
                            class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                            <i class="ti ti-basket text-base"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="text-base font-semibold text-gray-600 mb-1">Red Valvet Dress</h6>
                        <div class="flex justify-between">
                            <div class="flex gap-2 items-center">
                                <h6 class="text-base text-gray-600 font-semibold">$150</h6>
                                <span class="text-gray-500 text-sm">
                                    <del>$200</del>
                                </span>
                            </div>
                            <ul class="list-none flex gap-1">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="relative">
                        <a href="javascript:void(0)">
                            <img src="./assets/images/products/product-4.jpg" alt="product_img" class="w-full">
                        </a>
                        <a href="javascript:void(0)"
                            class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                            <i class="ti ti-basket text-base"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="text-base font-semibold text-gray-600 mb-1">Cute Soft Teddybear</h6>
                        <div class="flex justify-between">
                            <div class="flex gap-2 items-center">
                                <h6 class="text-base text-gray-600 font-semibold">$285</h6>
                                <span class="text-gray-500 text-sm">
                                    <del>$345</del>
                                </span>
                            </div>
                            <ul class="list-none flex gap-1">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="ti ti-star text-yellow-500 text-sm"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p class="text-base text-gray-500 font-normal p-3 text-center">
                    Design and Developed by <a href="https://adminmart.com/" target="_blank"
                        class="text-blue-600 underline hover:text-blue-700">AdminMart.com</a>
                </p>
            </footer>
        </div>


    </main>
@endsection
