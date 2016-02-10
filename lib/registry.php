<?php

  namespace registry;

  function test(): bool
    {
      return true;
    }

  function catalog(string $url)
    {
      return json_decode(\curl\get("$url/v2/_catalog"));
    }

  function isAvailable(string $url): bool
    {

    }

  function search(string $searchTerm): string
    {

    }

  function getImage(string $url, string $imageName, string $imageTag)
    {
      return json_decode(\curl\get("$url/v2/$imageName/manifests/$imageTag"));
    }

  function getImageTags(string $url, string $imageName)
    {
      return json_decode(\curl\get("$url/v2/$imageName/tags/list"));
    }

  function getLabels(string $imageId): string
    {

    }

// EOF
