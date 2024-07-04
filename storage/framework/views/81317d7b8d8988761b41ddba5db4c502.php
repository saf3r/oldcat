<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'href'
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'href'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<a href="<?php echo e($href); ?>" <?php echo e($attributes->merge(['class' => 'flex items-center justify-center h-[38px] space-x-3 cursor-pointer rounded-md bg-basic py-2 px-5 text-center text-sm font-medium text-white transition duration-200 ease-in-out hover:bg-basic-hover'])); ?>>
    <?php echo e($slot); ?>

</a>

<?php /**PATH C:\xampp\htdocs\oldcat\resources\views/components/buttons/basic-link.blade.php ENDPATH**/ ?>