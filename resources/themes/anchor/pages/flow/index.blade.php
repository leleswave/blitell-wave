<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('flowbuilder');
?>

<x-layouts.app>
    <x-app.container x-data="flowBuilder()" x-cloak>

        <x-app.alert id="dashboard_alert" class="hidden lg:flex">
            Configure your AI telephone service with the interactive flow builder.
        </x-app.alert>

        <x-app.heading
            title="AI Flow Builder"
            description="Drag and drop nodes to create a custom call flow."
            :border="false"
        />

        <!-- Flow Builder Canvas -->
        <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
            <!-- Nodes Library -->
            <div class="bg-white p-4 rounded shadow w-full lg:w-1/4">
                <h3 class="text-lg font-bold mb-4">Node Library</h3>
                <div class="space-y-2">
                    <button
                        class="block w-full px-4 py-2 text-left text-sm font-medium text-gray-700 bg-gray-100 rounded hover:bg-gray-200"
                        @click="addNode('Welcome')">
                        Welcome Message
                    </button>
                    <button
                        class="block w-full px-4 py-2 text-left text-sm font-medium text-gray-700 bg-gray-100 rounded hover:bg-gray-200"
                        @click="addNode('Menu')">
                        Menu
                    </button>
                    <button
                        class="block w-full px-4 py-2 text-left text-sm font-medium text-gray-700 bg-gray-100 rounded hover:bg-gray-200"
                        @click="addNode('Action')">
                        Action
                    </button>
                    <button
                        class="block w-full px-4 py-2 text-left text-sm font-medium text-gray-700 bg-gray-100 rounded hover:bg-gray-200"
                        @click="addNode('Transfer')">
                        Transfer Call
                    </button>
                </div>
            </div>

            <!-- Flow Canvas -->
            <div class="bg-gray-100 p-4 rounded shadow w-full lg:w-3/4 relative">
                <div id="flow-canvas" class="relative h-[500px] w-full bg-white rounded shadow overflow-hidden">
                    <template x-for="(node, index) in nodes" :key="index">
                        <div
                            class="absolute p-4 bg-blue-100 border border-blue-300 rounded shadow"
                            :style="{ left: node.x + 'px', top: node.y + 'px' }"
                            draggable="true"
                            @dragstart="dragStart($event, index)"
                            @dragend="dragEnd($event, index)"
                        >
                            <h4 class="text-sm font-bold text-blue-600" x-text="node.type"></h4>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="flex justify-end mt-6">
            <button
                class="px-4 py-2 text-white bg-green-600 rounded hover:bg-green-700"
                @click="saveFlow()">
                Save Flow
            </button>
        </div>

    </x-app.container>

    <!-- Alpine.js Logic -->
    <script>
        function flowBuilder() {
            return {
                nodes: [],
                addNode(type) {
                    this.nodes.push({
                        type,
                        x: 50,
                        y: 50
                    });
                },
                dragStart(event, index) {
                    event.dataTransfer.setData("index", index);
                },
                dragEnd(event, index) {
                    const rect = event.target.parentElement.getBoundingClientRect();
                    this.nodes[index].x = event.clientX - rect.left;
                    this.nodes[index].y = event.clientY - rect.top;
                },
                saveFlow() {
                    console.log("Flow Saved", this.nodes);
                    alert('Flow configuration saved successfully!');
                }
            };
        }
    </script>
</x-layouts.app>
