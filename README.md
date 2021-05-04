# Aero admin example Vue.js component

This module outlines the steps required to register custom Vue.js components into the admin provided by the `aerocommerce/admin` package.

## Blade usage

Include in your modules blade template file the reference to the components.js and initilize with the Vue.js instance:

```blade
@push('scripts')
    <script src="{{ asset(mix('components.js', 'modules/aerocargo/admin-example-vue')) }}"></script>
    <script>
        window.AeroAdmin.vue.use(window.exampleAdminComponents);
    </script>
@endpush
```

Use your custom component by referencing its tag:

```blade
<example-component count="100" />
```
