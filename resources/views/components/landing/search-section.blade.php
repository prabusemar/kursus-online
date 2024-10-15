<div class="w-full bg-[#403d39] p-3 border border-dashed border-[#36332f]">
    <div class="container mx-auto">
        <div class="flex justify-end items-center">
            <div class="flex flex-row items-center gap-2">
                <form action="{{ $url }}" method="GET" class="flex items-center gap-1">
                    <input type="text" placeholder="Cari disini..."
                        class="p-2 rounded-lg text-white bg-[#333333] focus:outline-none focus:ring-1 focus:ring-[#BD562D] text-sm border border-[#403D39]"
                        name="search" value="{{ request()->search }}" />
                    <button type="submit"
                        class="p-2 rounded-lg text-white bg-[#BD562D] hover:bg-[#EB5E28] focus:outline-none focus:ring-1 focus:ring-[#403D39] text-sm border border-[#BD562D]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search w-5 h-5"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
