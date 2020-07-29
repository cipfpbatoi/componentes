<?php
/**
 * Created by PhpStorm.
 * User: igomis
 * Date: 2020-07-04
 * Time: 09:51
 */

namespace Tests;


class ModalTest extends TestCase
{

    protected function csrfField()
    {
        $this->startSession();

        return sprintf('<input type="hidden" name="_token" value="%s">', $this->app['session']->token());
    }

    /** @test */
    function a_template_renders_modal()
    {
        $this->makeTemplate('<x-modal name="aviso" title="Hola" message="Adeu">Hola</x-modal>')
            ->assertRender('
                        <div id="aviso" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Hola</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formAviso" action="#" method="POST">'.$this->csrfField().'
                                            Hola
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" form="formAviso" class="btn btn-primary">Adeu</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>'
            );
    }





}
