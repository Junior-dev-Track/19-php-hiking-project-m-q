<x-mail::message>
# Nouvelle demande de contact

Une nouvelle demande de contact a été reçue pour la propriété <a href="{{ route('hike.show', ['slug' => $hike->getSlug(), 'hike' => $hike]) }}">{{ $hike->title }}</a>.

- Prenom: {{ $data['firstname'] }}
- Nom: {{ $data['lastname'] }}
- Telephone: {{ $data['phone'] }}
- Email: {{ $data['email'] }}

**Message:** <br>
{{ $data['message'] }}
</x-mail::message>
