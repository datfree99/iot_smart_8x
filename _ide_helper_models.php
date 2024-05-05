<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\PostModel
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $slug
 * @property string $title
 * @property string|null $description
 * @property string $contents
 * @property string|null $image
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereSeoKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class PostModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductModel
 *
 * @property int $id
 * @property int $category_id
 * @property int $post_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ProductModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

