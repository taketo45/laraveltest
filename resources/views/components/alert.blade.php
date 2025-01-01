<div id="alert" {{ $attributes }}>
    {{ $slot }}
</div>
<style>
    #alert {
        width:100%;
        padding: 5px;
        border: none;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: #f2f2f2;
    }

    #alert.error{
        color: red;
        background-color: #fff2f2;
    }

    #alert.info{
        color: blue;
        background-color: #f2f2ff;
    }
</style>