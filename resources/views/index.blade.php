@extends('layouts.app')

@section('title', 'Home Page')
@section('styles', '')

@section('content')
    <main class="w-full">
        <section class="hero w-full flex flex-wrap">
            <x-hero-section />
            <x-hero-section-slider-right />
        </section>

        <x-custom-modal 
            modalId="influencer-modal-container"
            title="Enter your details" 
            cancelButtonText="Cancel" >

            {{-- Influencer modal container --}}
            <x-form action="" class="max-w-md mx-auto p-8 rounded-lg" id="influencer-form">
            @csrf
            <x-input-field 
                type="text" 
                name="username" 
                label="Username"
                inputWrapperCss="" 
                inputInputCss="" 
                inputLabelCss="" 
                placeholder="" />

            <x-input-field 
                type="email" 
                name="email" 
                label="Email" 
                inputWrapperCss="" 
                inputInputCss="" 
                inputLabelCss="" 
                placeholder="" />

            <x-input-field 
                type="text" 
                name="phone" 
                label="Phone Number" 
                inputWrapperCss="" 
                inputInputCss="" 
                inputLabelCss="" 
                placeholder=" " />
            
            <x-input-field 
                type="text" 
                name="instagram" 
                label="Instagram Link" 
                inputWrapperCss="" 
                inputInputCss="" 
                inputLabelCss="" 
                placeholder="" />

            <x-input-field 
                type="text" 
                name="youtube" 
                label="Youtube Link" 
                inputWrapperCss="" 
                inputInputCss="" 
                inputLabelCss="" 
                placeholder="" />

            <x-input-field 
                type="text" 
                name="twitter" 
                label="Twitter Link" 
                inputWrapperCss="" 
                inputInputCss="" 
                inputLabelCss="" 
                placeholder="" />

                    <x-button type="submit">Submit</x-button>
            </x-form>
        </x-custom-modal>

        {{-- Voter modal container --}}
        <x-custom-modal 
            modalId="voter-modal-container"
            title="Enter your details" 
            cancelButtonText="Cancel" >
            
            <x-form action="" class="max-w-md mx-auto p-8 rounded-lg" id="voter-form">
                @csrf
                <x-input-field 
                    type="email" 
                    name="email" 
                    label="Email" 
                    inputWrapperCss="" 
                    inputInputCss="" 
                    inputLabelCss="" 
                    placeholder="" />

                <x-input-field 
                    type="text" 
                    name="phone" 
                    label="Phone Number" 
                    inputWrapperCss="" 
                    inputInputCss="" 
                    inputLabelCss="" 
                    placeholder=" " />
                
                <x-input-field 
                    type="text" 
                    name="zip" 
                    label="Zip Code" 
                    inputWrapperCss="" 
                    inputInputCss="" 
                    inputLabelCss="" 
                    placeholder="" />

                    <x-button type="submit">Submit</x-button>
            </x-form>
        </x-custom-modal>
    </main> 
@endsection

@section('scripts', '')

