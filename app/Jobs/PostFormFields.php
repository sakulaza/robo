<?php
namespace App\Jobs;
use App\Category;
use App\Post;
use App\Tag;
use Carbon\Carbon;
//use Illuminate\Contracts\Bus\SelfHandling;
class PostFormFields extends Job 
{
    /**
     * The id (if any) of the Post row
     *
     * @var integer
     */
    protected $id;
    /**
     * List of fields and default value for each field
     *
     * @var array
     */
    protected $fieldList = [
        'title' => '',
        'subtitle' => '',
        'page_image' => '',
        'content' => '',
        'meta_description' => '',
        'is_draft' => "0",
        'is_cat' => "0",
        'publish_date' => '',
        'publish_time' => '',
        'layout' => 'default',
        'category_id' => '',
        'tags' => [],
        'categories' => [],
    ];
    /**
     * Create a new command instance.
     *
     * @param integer $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }
    /**
     * Execute the command.
     *
     * @return array of fieldnames => values
     */
    public function handle()
    {
        $fields = $this->fieldList;
        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $fields);
        } else {
            $when = Carbon::now()->addHour();
            $fields['publish_date'] = $when->format('M-j-Y');
            $fields['publish_time'] = $when->format('g:i A');
        }
        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }

        $categories = Category::select('id','title')->get();

        return array_merge(
            $fields,
            [
                'allTags' => Tag::pluck('tag')->all(),
                'categories' => $categories,
            ]
        );
    }
    /**
     * Return the field values from the model
     *
     * @param integer $id
     * @param array $fields
     * @return array
     */
    protected function fieldsFromModel($id, array $fields)
    {
        $post = Post::findOrFail($id);
        $fieldNames = array_keys(array_except($fields, ['tags']));
        $fields = ['id' => $id];
        foreach ($fieldNames as $field) {
            $fields[$field] = $post->{$field};
        }
        $fields['tags'] = $post->tags()->pluck('tag')->all();
        return $fields;
    }
}