@extends('welcome')
@section('content')
    <div class="container">
        <div class="mx-auto w-75 py-3">
            <div class="card w-100 text-end p-3">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::has('success')}}
                    </div>
                @endif
                <form action="{{ route('request.store') }}" method="post">
                    @csrf
                    <label for="work_name" class="my-2">اسم الخدمة</label>
                    <input class="form-control text-end" id="work_name" name="work_name" type="text">
                    <label for="" class="my-2">القسم</label>
                    <select name="category" class="form-select text-end" aria-label="Default select example">
                        <option selected>اختر القسم</option>
                        <option value="برمجة وتطوير">برمجة وتطوير</option>
                        <option value="أعمال">أعمال</option>
                        <option value="تصميم فيديو">تصميم فيديو</option>
                        <option value="كتابة وترجمة">كتابة وترجمة</option>
                        <option value="التسويق الإلكتروني">التسويق الإلكتروني</option>
                        <option value="تدريب عن بعد">تدريب عن بعد</option>
                        <option value="صوتيات">صوتيات</option>
                        <option value="تصميم">تصميم</option>
                      </select>
                    <label for="work_name" class="my-2">شرح الخدمة</label>
                    <textarea name="description" class="text-end form-control" rows="15" clos="60" maxlength="900"></textarea>
                    <button type="submit" class="btn btn-primary my-2">اضف الخدمة الان</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection