<template>
	<div class="panel">Testы
		<example-component/>
	</div>
</template>

<script>

    import ExampleComponent from "./ExampleComponent";

    export default {
        name: 'test',
        components: {ExampleComponent,}
    }
</script>

<style scoped>
	.panel {
		padding: 10px;
		border: 1px lawngreen solid;
	}
</style>