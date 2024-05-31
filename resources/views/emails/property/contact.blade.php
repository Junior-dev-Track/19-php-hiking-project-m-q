<x-mail::message>
# Nouvelle demande de contact

Une nouvelle demande de contact a été reçue pour la rando <a href="{{ route('hike.show', ['slug' => $hike->getSlug(), 'hike' => $hike]) }}">{{ $hike->title }}</a>.

- Prénom: {{ $data['firstname'] }}
- Nom: {{ $data['lastname'] }}
- Téléphone: {{ $data['phone'] }}
- Email: {{ $data['email'] }}

**Message:** <br>
{{ $data['message'] }}
</x-mail::message>
