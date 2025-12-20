<?php
class Evento
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    private function load(): array
    {
        if (!file_exists($this->file)) {
            return [];
        }

        return json_decode(file_get_contents($this->file), true) ?? [];
    }

    private function save(array $eventos): void
    {
        file_put_contents(
            $this->file,
            json_encode($eventos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }

    public function all(): array
    {
        return $this->load();
    }

    public function add(array $event): void
    {
        $events = $this->load();
        $events[] = $event;
        $this->save($events);
    }

    public function deleteByTitle(string $titulo): void
    {
        $events = array_filter(
            $this->load(),
            fn($e) => $e['titulo'] !== $titulo
        );

        $this->save(array_values($events));
    }
}
