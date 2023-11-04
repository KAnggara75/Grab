<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body class="antialiased">
  <main class="flex flex-row items-start justify-between">
    <article class="bg-gray-100 p-10">
      <div class="mx-auto w-[600px] border-[1px] border-solid border-[#f0efef] bg-white">
        <table role="presentation" width="100%">
          <tbody>
            <tr>
              <td class="bg-[#00b14f] bg-header bg-auto bg-bottom bg-no-repeat text-white">
                <table class="text-white" role="presentation" width="100%">
                  <tbody>
                    <tr>
                      <td class="whitespace-nowrap p-4 font-semibold text-white" align="left" width="1">
                        <div class="whitespace-nowrap">GrabCar</div>
                      </td>
                      <td class="p-4" align="right" width="600">
                        <img class="w-12 align-middle leading-none" src="{{ asset("img/logo.png") }}">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table class="text-white" class="w-full" role="presentation">
                  <tbody>
                    <tr>
                      <td align="left" valign="top" width="312">
                        <div class="px-6 pb-3 text-white">
                          <div class="text-[32px] font-semibold leading-[38px]">Semoga kamu menikmati</div>
                          <div class="mb-2 text-[32px] font-semibold leading-[38px]" id="head">perjalananmu ya!
                          </div>
                          <div class="pb-8 text-xs font-semibold">
                            <div class="text-white">Dijemput pada {{ $date }}</div>
                            <div class="whitespace-nowrap text-white">Kode booking: A-{{ $booking_code }}</div>
                          </div>
                        </div>
                      </td>
                      <td align="right" valign="bottom">
                        <div class="px-6 pb-[14px]">
                          <img class="min-w-[216px] align-middle leading-none" src="{{ asset("img/car.png") }}">
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td class="px-6">
                <div class="py-1">
                  <table class="font-semibold" role="presentation" width="100%">
                    <tbody>
                      <tr>
                        <td class="text-gray-900" align="left" width="100%">Total</td>
                        <td class="whitespace-nowrap pl-6 text-[32px] text-gray-900" align="right" width="1">
                          <div class="whitespace-nowrap">RP {{ $nominal }}</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="border-[0px] border-t-[1px] border-solid border-[#00b14f] pt-4 text-[12px] text-gray-900">
                  Struk diterbitkan oleh pengemudi <span class="text-[#00b14f]">{{ $driver }}</span>.
                </div>
                <table role="presentation" width="100%">
                  <tbody>
                    <tr>
                      <td class="py-2" align="left" width="100%">
                        <table role="presentation" width="100%">
                          <tbody>
                            <tr>
                              <td class="overflow-visible whitespace-nowrap pr-4 text-[0px]" width="1">
                                <div class="inline-block overflow-visible">
                                  <div class="h-14 w-14 rounded-full bg-[#f7f7f7] bg-cover bg-top">
                                    <img src="{{ asset($icon) }}">
                                  </div>
                                </div>
                              </td>
                              <td class="text-[12px]">
                                <div class="text-gray-900">{{ $rating }}
                                  <img class="h-3 w-3 align-middle leading-none" src="{{ asset("img/star.png") }}">
                                </div>
                                <div class="text-gray-400">Pujian untuk pengemudi</div>
                                <div class="font-semibold text-gray-900">{{ $review }}</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="pb-2 pt-1 font-semibold text-gray-900">Rincian</div>
                <div class="border-t border-solid border-[#f0efef] pt-1">
                  <table class="mt-1 leading-6" role="presentation" width="100%">
                    <tbody>
                      <tr>
                        <td class="pb-2 text-primary" align="left" valign="top" width="100%">
                          Total Tarif
                        </td>
                        <td class="whitespace-nowrap pb-2 pl-6 text-primary" align="right" valign="top"
                          width="1">
                          <div class="whitespace-nowrap">
                            {{ $nominal }}
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="pb-2 pl-4 text-third" align="left" valign="top" width="100%">
                          <span>Tarif</span>
                        </td>
                        <td class="whitespace-nowrap pb-2 pl-4 text-third" align="right" valign="top"
                          width="1">
                          <div class="whitespace-nowrap">
                            {{ $bill }}
                          </div>
                        </td>
                      </tr>
                      <tr class="{{ $isDiscount ? "" : "hidden" }}">
                        <td class="pb-2 pl-4 text-third" align="left" valign="top" width="100%">
                          <span>Diskon</span>
                        </td>
                        <td class="whitespace-nowrap pb-2 pl-4 text-third" align="right" valign="top"
                          width="1">
                          <div class="whitespace-nowrap">
                            {{ $discount }}
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="pb-3 text-primary" align="left" valign="top" width="100%">
                          Biaya Jasa Aplikasi
                        </td>
                        <td class="whitespace-nowrap pb-3 pl-6 text-primary" align="right" valign="top"
                          width="1">
                          <div class="whitespace-nowrap">
                            {{ $fee }}
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="border-t border-solid border-[#f0efef]">
                  <table class="mt-3" role="presentation" width="100%">
                    <tbody>
                      <tr>
                        <td class="w-full pb-3 text-primary" align="left">Total</td>
                        <td class="whitespace-nowrap pb-3 pl-6 text-primary" align="right" width="1">
                          <div class="whitespace-nowrap">{{ $nominal }}</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <table class="text-[12px]" role="presentation" width="100%">
                  <tbody>
                    <tr>
                      <td class="w-1/2 pr-3" align="left" valign="top">
                        <div class="mb-2">
                          <div class="text-[#9a9a9a]">Penumpang</div>
                          <div class="text-primary">Kelvin Anggara</div>
                        </div>
                        <div class="mb-2">
                          <div class="text-[#9a9a9a]">Profil</div>
                          <div class="text-primary">Pribadi</div>
                        </div>
                      </td>
                      <td class="w-1/2 pl-3" align="left" valign="top">
                        <div class="text-[#9a9a9a]">Dibayar dengan</div>
                        <table class="w-full" role="presentation">
                          <tbody>
                            <tr>
                              <td class="whitespace-nowrap pb-3 pr-2 pt-1" align="left" width="24">
                                <img class="w-6 align-middle" src="{{ asset("img/ovo.png") }}">
                              </td>
                              <td class="pb-3 pt-1 text-primary" align="left">
                                OVO Cash
                              </td>
                              <td class="whitespace-nowrap pb-3 pl-6 pt-1 text-primary" align="right"
                                width="1">
                                <div class="whitespace-nowrap">{{ $nominal }}</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td class="text-center text-[12px]" align="center">
                <div class="mx-6 border-t border-solid border-[#f0efef] py-2 text-primary">Ada masalah? Kami siap
                  membantu kamu.</div>
                <table class="mb-2 w-full text-center text-[12px]" role="presentation" align="center">
                  <tbody>
                    <tr>
                      <td class="w-1/4 pb-6">
                        <a class="inline-block text-primary" href="#" target="_blank">
                          <div>
                            <img class="m-auto block h-10 align-middle" src="{{ asset("img/lost.png") }}">
                          </div>
                          <div class="mt-1 px-1 font-semibold text-[#00a5cf]">Barang hilang</div>
                        </a>
                      </td>
                      <td class="w-0.5 pb-6">
                        <div class="h-5 border-r border-solid border-[#f0efef]"></div>
                      </td>
                      <td class="w-1/4 pb-6">
                        <a class="inline-block text-primary" href="#" target="_blank">
                          <div>
                            <img class="m-auto block h-10 align-middle" src="{{ asset("img/wrong.png") }}">
                          </div>
                          <div class="mt-1 px-1 font-semibold text-[#00a5cf]">Perjalanan yang salah</div>
                        </a>
                      </td>
                      <td class="w-0.5 pb-6">
                        <div class="h-5 border-r border-solid border-[#f0efef]"></div>
                      </td>
                      <td class="w-1/4 pb-6">
                        <a class="inline-block text-primary" href="#" target="_blank">
                          <div>
                            <img class="m-auto block h-10 align-middle" src="{{ asset("img/not_match.png") }}">
                          </div>
                          <div class="mt-1 px-1 font-semibold text-[#00a5cf]">Tarif tidak sesuai</div>
                        </a>
                      </td>
                      <td class="w-0.5 pb-6">
                        <div class="h-5 border-r border-solid border-[#f0efef]"></div>
                      </td>
                      <td class="w-1/4 pb-6">
                        <a class="inline-block text-primary" href="#" target="_blank">
                          <div>
                            <img class="m-auto block h-10 align-middle" src="{{ asset("img/help.png") }}">
                          </div>
                          <div class="mt-1 px-1 font-semibold text-[#00a5cf]">Dapatkan Bantuan</div>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td class="bg-[#f7f7f7] px-6 py-2">
                <div class="border-b border-solid pb-2">
                  <div class="font-semibold leading-6 text-primary">Perjalananmu</div>
                  <div class="text-[12px] text-primary">{{ $distance }} km • {{ $time }} mins</div>
                </div>
                <table class="mt-4 w-full" role="presentation">
                  <tbody>
                    <tr>
                      <td>
                        <table class="mb-6 w-full" role="presentation">
                          <tbody>
                            <tr>
                              <td class="w-4 overflow-hidden" valign="top" align="center">
                                <img class="block h-7 w-7 align-middle leading-none"
                                  src="{{ asset("img/pick_up.png") }}">
                                <div class="max-h-7 overflow-visible text-[32px] leading-6 text-[#c5c5c5]">
                                  <div class="py-[2px]">⋮</div>
                                  <div class="py-[2px]">⋮</div>
                                  <div class="py-[2px]">⋮</div>
                                  <div class="py-[2px]">⋮</div>
                                  <div class="py-[2px]">⋮</div>
                                  <div class="py-[2px]">⋮</div>
                                  <div class="py-[2px]">⋮</div>
                                  <div class="py-[2px]">⋮</div>
                                </div>
                              </td>
                              <td class="pl-1" valign="top">
                                <div class="leading-6 text-primary">{{ $pickup }}</div>
                                <div class="mb-3 text-[12px] font-light text-[#676767]">
                                  {{ $pickuptime }}{{ $timePrefix }}</div>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center" width="32">
                                <img class="block h-8 w-8 align-middle leading-none"
                                  src="{{ asset("img/drop_off.png") }}">
                              </td>
                              <td class="pl-1" valign="top">
                                <div class="leading-6 text-primary">{{ $dropoff }}</div>
                                <div class="text-[12px] font-light text-[#676767]">
                                  {{ $dropofftime }}{{ $timePrefix }}</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td class="bg-primary p-6 text-[12px] font-light text-white">
                <table class="mb-10 w-full text-[12px] font-light text-white" role="presentation">
                  <tbody>
                    <tr>
                      <td class="w-1/2">
                        <div class="mb-4">
                          <img class="w-20 align-middle leading-none" src="{{ asset("img/grab.png") }}">
                        </div>
                      </td>
                      <td class="w-1/2 pl-8">
                        <div class="mb-4 box-border pr-4 text-center text-[11px]">
                          <div class="font-bold">PT Grab Teknologi Indonesia</div>
                          <div class="font-bold">NPWP: 74.220.169.2-071.000 </div>
                          <div>South Quarter Tower C Lantai 7 dan Mezzanine Jl. R.A. Kartini Kav. 8, Desa/Kelurahan
                            Cilandak Barat, Kec. Cilandak, Kota Adm. Jakarta Selatan, Provinsi DKI Jakarta 12430</div>
                        </div>

                      </td>
                    </tr>
                    <tr>
                      <td class="w-1/2">
                        <div class="mb-0.5 text-white">
                          Grab HQ <br>
                          3 Media Close, <br>
                          Singapore 138498
                        </div>
                      </td>
                      <td class="w-1/2 pl-[52px]">
                        <div class="text-white">Follow us</div>
                        <div class="mt-2 whitespace-nowrap text-[0px]">
                          <a class="mr-2 inline-block" href="#" target="_blank">
                            <img class="h-10 w-10 align-middle leading-none" src="{{ asset("img/fb.png") }}">
                          </a>
                          <a class="mr-2 inline-block" href="#" target="_blank">
                            <img class="h-10 w-10 align-middle leading-none" src="{{ asset("img/twitter.png") }}">
                          </a>
                          <a class="mr-2 inline-block" href="#" target="_blank">
                            <img class="h-10 w-10 align-middle leading-none" src="{{ asset("img/ig.png") }}">
                          </a>
                          <a class="mr-2 inline-block" href="#" target="_blank">
                            <img class="h-10 w-10 align-middle leading-none" src="{{ asset("img/linkedin.png") }}">
                          </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mb-6 border-0 border-t border-solid border-[#f0efef] opacity-20">
                </div>
                <div class="text-center text-white">© Grab 2023</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <aside class="min-h-screen bg-gray-700 p-2">
      <form action="/#head" method="post">
        @csrf
        <div class="pt-56">
          <input
            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
            id="name" name="name" type="text" value="Kelvin Anggara" placeholder="Kelvin Anggara">
        </div>
        <div class="pt-2">
          <input
            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
            id="price" name="price" type="number" value="{{ old('price', request()->input('price')) }}" placeholder="17500">
        </div>
        <div class="py-2">
          <input
            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
            id="discount" name="discount" type="number" placeholder="Discount" value="{{ old('discount', request()->input('discount')) }}">
        </div>
        <hr>
        <div class="py-2">
          <input
            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
            id="ddmm" name="ddmm" type="number" value="{{ old("ddmm", request()->input("ddmm")) }}"
            placeholder="DDMM">
        </div>
        <div class="py-2">
          <input
            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
            id="hhmm" name="hhmm" type="number" value="{{ old("hhmm", request()->input("hhmm")) }}"
            placeholder="hhmm">
        </div>
        <div class="my-3 w-full">
          <div class="relative">
            <select
              class="block w-full appearance-none rounded border border-gray-200 bg-gray-200 px-4 py-3 pr-8 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
              id="trip" name="trip">
              <option value="A" {{ old("trip", request()->input("trip")) == 'A' ? 'selected' : '' }}>A</option>
              <option value="B" {{ old("trip", request()->input("trip")) == 'B' ? 'selected' : '' }}>B</option>
              <option value="C" {{ old("trip", request()->input("trip")) == 'C' ? 'selected' : '' }}>C</option>
              <option value="D" {{ old("trip", request()->input("trip")) == 'D' ? 'selected' : '' }}>D</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </div>
          </div>
        </div>
        <hr>
        <div class="flex items-center justify-between py-4">
          <button
            class="focus:shadow-outline rounded bg-green-600 px-4 py-2 font-bold text-white hover:bg-green-700 focus:outline-none"
            type="submit">
            Save
          </button>
        </div>
      </form>
    </aside>
  </main>
</body>

</html>
