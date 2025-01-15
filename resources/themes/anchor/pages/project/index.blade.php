<?php
    use function Laravel\Folio\{middleware, name};
    use App\Models\Project;
    use Livewire\Volt\Component;
    middleware('auth');
    name('project');

    new class extends Component{
        public $projects;

        public function mount()
        {
            $this->projects = auth()->user()->projects()->latest()->get();
        }

        public function deleteProject(Project $project)
        {
            $project->delete();
            $this->projects = auth()->user()->projects()->latest()->get();
        }
    }
?>

<x-layouts.app>
    @volt('projects')
        <x-app.container>

            <div class="flex items-center justify-between mb-5">
                <x-app.heading
                        title="Projects"
                        description="Check out your projects below"
                        :border="false"
                    />
                <x-button tag="a" href="/projects/create">New Project</x-button>
            </div>

            @if($projects->isEmpty())
                <div class="w-full p-20 text-center bg-gray-100 rounded-xl">
                    <p class="text-gray-500">You don't have any projects yet.</p>
                </div>
            @else
                <div class="overflow-x-auto border rounded-lg">
                    <table class="min-w-full bg-white">
                        <thead class="text-sm bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left">Name</th>
                                <th class="px-4 py-2 text-left">Description</th>
                                <th class="px-4 py-2 text-left">Start Date</th>
                                <th class="px-4 py-2 text-left">End Date</th>
                                <th class="px-4 py-2 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td class="px-4 py-2">{{ $project->name }}</td>
                                    <td class="px-4 py-2">{{ Str::limit($project->description, 50) }}</td>
                                    <td class="px-4 py-2">{{ $project->start_date ? $project->start_date->format('Y-m-d') : 'N/A' }}</td>
                                    <td class="px-4 py-2">{{ $project->end_date ? $project->end_date->format('Y-m-d') : 'N/A' }}</td>
                                    <td class="px-4 py-2">
                                        <a href="/project/edit/{{ $project->id }}" class="mr-2 text-blue-500 hover:underline">Edit</a>
                                        <button wire:click="deleteProject({{ $project->id }})" class="text-red-500 hover:underline">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </x-app.container>
    @endvolt
</x-layouts.app>
