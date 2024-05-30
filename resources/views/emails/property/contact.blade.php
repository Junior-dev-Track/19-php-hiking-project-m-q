<x-mail::message>
# Nouvelle demande de contact

Une nouvelle demande de contact a été reçue pour la propriété <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>.

- Prenom: {{ $data['firstname'] }}
- Nom: {{ $data['lastname'] }}
- Telephone: {{ $data['phone'] }}
- Email: {{ $data['email'] }}

**Message:** <br>
{{ $data['message'] }}
</x-mail::message>
