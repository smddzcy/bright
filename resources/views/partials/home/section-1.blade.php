@extends('partials.section-block')

@section('id', 'section-1')

@section('heading', 'Bright | Boğaziçi Üniversitesi Girişimcilik Merkezi')

@section('description', 'Bright, mevcut yapıların çalışmasını güçlendirici ve bu yapıları Boğaziçi Üniversitesi değerleri ile birleştirici bir etkiye sahip bir oluşum olarak, dünya ile rekabet edecek yenilikçi şirketlerin Türkiye\'den çıkmasına zemin hazırlamak için çalışır.')

@section('extras')

  @foreach($items = [
    ["icon" => "share-alt", "text" => "Tanış, Paylaş"],
    ["icon" => "cogs", "text" => "Üret, Danış"],
    ["icon" => "graduation-cap", "text" => "Öğren, Geliş"],
    ["icon" => "line-chart", "text" => "Sonuç Al"]
  ] as $item)

    <div class="text-center col-md-3 col-xs-12 col-sm-6">
      <div class="icon">
        <i class="fa fa-3x fa-{{ $item['icon'] }}"></i>
      </div>
      <div class="text-under-icon">
        <h3>{{ $item['text'] }}</h3>
      </div>
    </div>

  @endforeach

@endsection