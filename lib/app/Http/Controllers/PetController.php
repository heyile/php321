<?php

/**
 * Swagger Petstore
 * This is a sample server Petstore server.  You can find out more about     Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).      For this sample, you can use the api key `special-key` to test the authorization     filters.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: apiteam@swagger.io
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class PetController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation addPet
     *
     * Add a new pet to the store.
     *
     *
     * @return Http response
     */
    public function addPet()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addPet');
        }
        $body = $input['body'];


        return response('How about implementing addPet as a post method ?');
    }
    /**
     * Operation updatePet
     *
     * Update an existing pet.
     *
     *
     * @return Http response
     */
    public function updatePet()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updatePet');
        }
        $body = $input['body'];


        return response('How about implementing updatePet as a put method ?');
    }
    /**
     * Operation findPetsByStatus
     *
     * Finds Pets by status.
     *
     *
     * @return Http response
     */
    public function findPetsByStatus()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['status'])) {
            throw new \InvalidArgumentException('Missing the required parameter $status when calling findPetsByStatus');
        }
        $status = $input['status'];


        return response('How about implementing findPetsByStatus as a get method ?');
    }
    /**
     * Operation findPetsByTags
     *
     * Finds Pets by tags.
     *
     *
     * @return Http response
     */
    public function findPetsByTags()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['tags'])) {
            throw new \InvalidArgumentException('Missing the required parameter $tags when calling findPetsByTags');
        }
        $tags = $input['tags'];


        return response('How about implementing findPetsByTags as a get method ?');
    }
    /**
     * Operation deletePet
     *
     * Deletes a pet.
     *
     * @param int $petId Pet id to delete (required)
     *
     * @return Http response
     */
    public function deletePet($petId)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deletePet as a delete method ?');
    }
    /**
     * Operation getPetById
     *
     * Find pet by ID.
     *
     * @param int $petId ID of pet to return (required)
     *
     * @return Http response
     */
    public function getPetById($petId)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getPetById as a get method ?');
    }
    /**
     * Operation updatePetWithForm
     *
     * Updates a pet in the store with form data.
     *
     * @param int $petId ID of pet that needs to be updated (required)
     *
     * @return Http response
     */
    public function updatePetWithForm($petId)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing updatePetWithForm as a post method ?');
    }
    /**
     * Operation uploadFile
     *
     * uploads an image.
     *
     * @param int $petId ID of pet to update (required)
     *
     * @return Http response
     */
    public function uploadFile($petId)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing uploadFile as a post method ?');
    }
}
