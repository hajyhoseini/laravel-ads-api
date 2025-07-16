<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad;
use Illuminate\Support\Str;

class AdSeeder extends Seeder
{
    public function run(): void
    {
        $operators = ['mci', 'irancell', 'rightel'];

        foreach ($operators as $operator) {
            for ($i = 1; $i <= 10; $i++) {
                Ad::create([
                    'number' => $this->generateNumber($operator, $i),
                    'operator' => $operator,
                    'price' => rand(10000, 50000),
                    'voice_url' => $i % 2 === 0 ? "https://example.com/audio{$i}.mp3" : null,
                    'video_url' => $i % 3 === 0 ? "https://example.com/video{$i}.mp4" : null,
                ]);
            }
        }
    }

    private function generateNumber($operator, $index)
    {
        $prefixes = [
            'mci' => '0912',
            'irancell' => '0935',
            'rightel' => '0922',
        ];

        return $prefixes[$operator] . str_pad((string)(100000 + $index), 7, '0', STR_PAD_LEFT);
    }
}
