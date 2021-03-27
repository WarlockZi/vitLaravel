<template>
	<div class="panel">
		App
		<test/>
		<example-component/>

	</div>
</template>

<script>
    import test from './components/test'
    import ExampleComponent from './components/ExampleComponent'

    export default {
        name: "App",
        components: {
            ExampleComponent,
            test,
        }
    }
</script>

<style scoped>

</style>