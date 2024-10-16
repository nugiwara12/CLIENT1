@props(['disabled' => false])

<input 
    @disabled($disabled) 
    {{ $attributes->merge([
        'class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm 
                    w-full p-2 md:p-3 lg:p-4 
                    text-sm md:text-base lg:text-lg'
    ]) }} 
/>
