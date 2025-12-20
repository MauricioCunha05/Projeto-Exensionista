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
        isset($events['currentid']) ? $events['currentid']++ : $events['currentid'] = 1;

        $currentid = $events['currentid'];
        $events['eventos'][$currentid] = $event;

        $this->save($events);
    }

    public function delete(string $id): void
    {
        $full = $this->load();
        $full['eventos'] = array_filter(
            $full['eventos'],
            fn($key) => ($key != $id),
            ARRAY_FILTER_USE_KEY 
        );

        $this->save($full);
    }
}
