import ExampleComponent from './components/ExampleComponent'

window.exampleAdminComponents = {
    install(Vue) {
        Vue.component('example-component', ExampleComponent)
    },
}
