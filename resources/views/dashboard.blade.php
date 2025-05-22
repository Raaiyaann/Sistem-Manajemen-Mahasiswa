<x-default-layout title="Dashboard" section_title="Dashboard">
  <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 p-6">
    <div class="px-6 py-4 bg-sky-100 border hover:border-l-8 border-sky-500 rounded-lg space-y-2 shadow-lg duration-300 transform hover:scale-105">
      <div class="text-zinc-700 text-sm font-medium">Total Students</div>
      <div class="text-3xl font-extrabold text-sky-600">521</div>
    </div>
    <div class="px-6 py-4 bg-green-100 border hover:border-l-8 border-green-500 rounded-lg space-y-2 shadow-lg duration-300 transform hover:scale-105">
      <div class="text-zinc-700 text-sm font-medium">Total Majors</div>
      <div class="text-3xl font-extrabold text-green-600">14</div>
    </div>
  </div>

  <div class="grid grid-cols-3 gap-6 p-6">
    <div class="col-span-3 sm:col-span-2 overflow-x-auto">
      <table class="min-w-full bg-white shadow-lg rounded-lg">
        <thead>
          <tr class="bg-zinc-100 border-b border-zinc-300 text-sm leading-normal text-zinc-700">
            <th class="py-4 px-6 text-left font-semibold">#</th>
            <th class="py-4 px-6 text-left font-semibold">Majors</th>
            <th class="py-4 px-6 text-center font-semibold">Total Students</th>
          </tr>
        </thead>
        <tbody class="text-zinc-600 text-sm font-light">
          <tr class="border-b border-zinc-300 hover:bg-zinc-50 duration-200">
            <td class="py-4 px-6 text-left">1</td>
            <td class="py-4 px-6 text-left">S1 Teknik Informatika</td>
            <td class="py-4 px-6 text-center">153</td>
          </tr>
          <tr class="border-b border-zinc-300 hover:bg-zinc-50 duration-200">
            <td class="py-4 px-6 text-left">2</td>
            <td class="py-4 px-6 text-left">S1 Sistem Informasi</td>
            <td class="py-4 px-6 text-center">124</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</x-default-layout>
