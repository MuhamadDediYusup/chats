<a {{ $attributes->merge(['class' => 'block w-full cursor-pointer px-4 py-3 text-start text-sm leading-5 text-gray-700
    dark:text-gray-300 bg-[var(--wc-light-secondary)] dark:bg-[var(--wc-dark-secondary)]
    hover:bg-[var(--wc-light-primary)] dark:hover:bg-[var(--wc-dark-primary)] focus:outline-hidden
    focus:bg-[var(--wc-light-primary)] dark:focus:bg-[var(--wc-dark-primary)] transition duration-150 ease-in-out'])
    }}>{{ $slot }}</a>
