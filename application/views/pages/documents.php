<h3 class="row-title title-center">Документы</h3>
<div class="documents">
    <?php if(isset($doc_list)): ?>
        <ol class="document-list">
            <?php foreach($doc_list as $document): ?>
                <li class="document">
                    <a href="/account/documents/<?php echo $document['id']; ?>"><?php echo $document['name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ol>
    <?php endif; ?>
</div>