@extends('app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">Company Details</h1>
            <div class="space-x-2">
                <a href="{{ route('companies.index') }}" class="text-gray-600 hover:text-gray-900">
                    Back to Companies
                </a>
                <a href="{{ route('companies.edit', $company) }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition duration-150 ease-in-out shadow-md hover:shadow-lg">
                 <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                 </svg>
                 Edit Company
             </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ $company->name }}</h3>
                        <p class="text-gray-600 mt-1">{{ $company->address }}</p>
                    </div>
                    <div class="text-right">
                        <div class="inline-block px-3 py-1 text-sm font-semibold bg-green-100 text-green-800 rounded-full">
                            Active
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-4">
                <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                    <div class="col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Contact Email</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <a href="mailto:{{ $company->email }}" class="text-blue-600 hover:text-blue-800">
                                {{ $company->email }}
                            </a>
                        </dd>
                    </div>

                    <div class="col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <a href="tel:{{ $company->phone }}" class="text-blue-600 hover:text-blue-800">
                                {{ $company->phone }}
                            </a>
                        </dd>
                    </div>

                    <div class="col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Website</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            @if($company->website)
                                <a href="{{ $company->website }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                    {{ $company->website }}
                                </a>
                            @else
                                <span class="text-gray-500">Not provided</span>
                            @endif
                        </dd>
                    </div>

                    <div class="col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Created</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $company->created_at->format('F d, Y') }}
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-600">
                        Last updated: {{ $company->updated_at->diffForHumans() }}
                    </span>
                    <form action="{{ route('companies.destroy', $company) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="text-red-600 hover:text-red-900 text-sm font-medium"
                                onclick="return confirm('Are you sure you want to delete this company?')">
                            Delete Company
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection