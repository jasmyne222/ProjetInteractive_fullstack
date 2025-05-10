<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\Choice;

class InteractiveStorySeeder extends Seeder
{
    public function run(): void
    {
        // Créer l’histoire
        $story = Story::create([
            'title' => 'Le date parfait (ou presque)',
            'summary' => 'Tu as matché avec quelqu’un et c’est enfin le jour du date. À toi de faire les bons choix pour que tout se passe bien... ou pas.',
        ]);

        // Chapitre 1 – Le début du date
        $chapter1 = Chapter::create([
            'story_id' => $story->id,
            'chapter_number' => 1,
            'content' => 'Tu arrives au café. Ton date est déjà là. Tu fais quoi ?',
        ]);

        // Chapitre 2 – Tu complimentes
        $chapter2 = Chapter::create([
            'story_id' => $story->id,
            'chapter_number' => 2,
            'content' => 'Tu complimentes son sourire. Il/elle te remercie, l’ambiance devient légère.',
        ]);

        // Chapitre 3 – Tu arrives en retard sans prévenir
        $chapter3 = Chapter::create([
            'story_id' => $story->id,
            'chapter_number' => 3,
            'content' => 'Tu arrives en retard sans prévenir. Ton date semble agacé.',
        ]);

        // Choix dans le chapitre 1
        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Tu complimentes son sourire.',
            'next_chapter_id' => $chapter2->id,
        ]);

        Choice::create([
            'chapter_id' => $chapter1->id,
            'text' => 'Tu t’assois et regardes ton téléphone.',
            'next_chapter_id' => $chapter3->id,
        ]);
    }
}
