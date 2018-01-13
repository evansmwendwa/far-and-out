<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\Serializer;
use App\Service\FileChooser;

class FilepickerController extends AbstractController
{
    /**
    * @Route("/evans-filepicker-list", name="evans_filepicker_list")
    */
    public function listAction(FileChooser $chooser, Serializer $serializer) {
        $files = $chooser->getFiles();

        return $serializer->JsonResponse(['files'=>$files->toArray()]);
    }

    /**
    * @Route("/evans-file-picker-upload", name="evans_filepicker_upload")
    */
    public function uploadAction(Request $request, Serializer $serializer, FileChooser $chooser) {
        $files = $request->files->get('chooserfiles');

        $uploadedFiles = $chooser->upload($files);

        return $serializer->JsonResponse(['file' => $uploadedFiles]);
    }
}
