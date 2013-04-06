<?php

namespace Wixair\ReparacionesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Wixair\ReparacionesBundle\Entity\Reparacion;
use Wixair\ReparacionesBundle\Form\ReparacionType;
use Wixair\ReparacionesBundle\Form\ReparacionFilterType;

/**
 * Reparacion controller.
 *
 * @Route("/reparacion")
 */
class ReparacionController extends Controller
{
    /**
     * Lists all Reparacion entities.
     *
     * @Route("/", name="reparacion")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WixairReparacionesBundle:Reparacion')->findAll();
        $form = $this->get('form.factory')->create(new ReparacionFilterType());

        if ($this->get('request')->query->has('submit-filter')) {
            // bind values from the request
            $form->bindRequest($this->get('request'));

            // initliaze a query builder
            $filterBuilder = $this->get('doctrine.orm.entity_manager')
                ->getRepository('WixairReparacionesBundle:Reparacion')
                ->createQueryBuilder('e');

            // build the query from the given form object
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);

            // now look at the DQL =)
            var_dump($filterBuilder->getDql());
            $q = $em->createQuery($filterBuilder->getDql());
            $entities = $q->execute();
        }else{
            $entities = $em->getRepository('WixairReparacionesBundle:Reparacion')->findAll();
        }
        return array(
            'entities' => $entities,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Reparacion entity.
     *
     * @Route("/{id}/show", name="reparacion_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WixairReparacionesBundle:Reparacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reparacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        
        $pdf = $this->container->get("white_october.tcpdf")->create('P', 'mm', array(87,170), true, 'UTF-8', false);
        // ---------------------------------------------------------
        $pdf->SetMargins(4, 4, 4, 3);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(true, 1);
        $pdf->SetFont('dejavusans', '', 8, '', true);
        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();

        // Set some content to print
        $html = $this->htmlPDF($entity);

        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

        // ---------------------------------------------------------

        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $pdf->Output('reparacion_'.$entity->getId().'.pdf', 'I');
        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Reparacion entity.
     *
     * @Route("/new", name="reparacion_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Reparacion();
        $form   = $this->createForm(new ReparacionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Reparacion entity.
     *
     * @Route("/create", name="reparacion_create")
     * @Method("POST")
     * @Template("WixairReparacionesBundle:Reparacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Reparacion();
        $form = $this->createForm(new ReparacionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reparacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Reparacion entity.
     *
     * @Route("/{id}/edit", name="reparacion_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WixairReparacionesBundle:Reparacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reparacion entity.');
        }

        $editForm = $this->createForm(new ReparacionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Reparacion entity.
     *
     * @Route("/{id}/update", name="reparacion_update")
     * @Method("POST")
     * @Template("WixairReparacionesBundle:Reparacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WixairReparacionesBundle:Reparacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reparacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ReparacionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reparacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Reparacion entity.
     *
     * @Route("/{id}/delete", name="reparacion_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('WixairReparacionesBundle:Reparacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reparacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reparacion'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    private function htmlPDF($entity){
        if($entity->getTipoEquipo() == 1){
            $equipo = "<u>Portatil</u> / Sobremesa";
        }else if($entity->getTipoEquipo() == 2){
            $equipo = "Portatil / <u>Sobremesa</u>";
        }else{
            $equipo = "Portatil / Sobremesa";
        }
        if($entity->getPresupuestoAceptado() == 1){
            $presupuestoaceptado = "<u>Sí</u> / No";
        }else if($entity->getPresupuestoAceptado() == 2){
            $presupuestoaceptado = "Sí / <u>No</u>";
        }else{
            $presupuestoaceptado = "Sí / No";
        }
        
$html = <<<EOD
   <style>
       th{font-weight:bold;vertical-align:bottom;}
       tr{width:100%;}
       span{border:1px solid black;}
       .con{border:1px solid black;line-height:5px;}
   </style>
        <table cellspacing="2" cellspadding="0">
    <tbody>
        <tr>
            <td><img src="images/logo.jpg" /></td>
            <td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registro: <span>{$entity->getId()}</span></td>
        </tr>
        <tr><td colspan="2" style="text-align:center;font-size:20px;">C/ Samuel Liébana, 1 - Jamilena - Movil: 650 979 270</td></tr>
        <tr>
            <th>Fecha Entrada</th>
            <th>Fecha Salida</th>
        </tr>
        <tr>
            <td class="con">&nbsp;&nbsp;{$entity->getFechaEntrada()->format("d-m-Y")}</td>
            <td class="con">&nbsp;&nbsp;{$entity->getFechaEntrada()->format("d-m-Y")}</td>
        </tr>
        <tr>
            <th>Nombre</th>
        </tr>
        <tr>
            <td class="con" colspan="2">&nbsp;&nbsp;{$entity->getNombre()}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <th>Equipo</th>
        </tr>
        <tr>
            <td class="con">&nbsp;&nbsp;{$entity->getTlf()}</td>
            <td class="con">&nbsp;&nbsp;{$equipo}</td>
        </tr>
        <tr>
            <th>N/S</th>
        </tr>
        <tr>
            <td class="con" colspan="2">&nbsp;&nbsp;{$entity->getNumeroserie()}</td>
        </tr>
        <tr>
            <th colspan="2">Accesorios que acompañan</th>
        </tr>
        <tr>
            <td class="con" colspan="2" style="height:30px;">&nbsp;&nbsp;{$entity->getAccesorios()}</td>
        </tr>
        <tr>
            <th colspan="2">Descripción de la averia</th>
        </tr>
        <tr>
            <td class="con" colspan="2" style="height:30px;">&nbsp;&nbsp;{$entity->getAveria()}</td>
        </tr>
        <tr>
            <th colspan="2">Reparación</th>
        </tr>
        <tr>
            <td class="con" colspan="2" style="height:50px;">&nbsp;&nbsp;{$entity->getReparacion()}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <th>Presupuesto Aceptado</th>
        </tr>
        <tr>
            <td class="con">&nbsp;&nbsp;{$entity->getPrecio()} €</td>
            <td class="con">&nbsp;&nbsp;{$presupuestoaceptado}           
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="con" style="height:45px;"></td>
        </tr>
        <tr>
            <th>Observaciones</th>
        </tr>
        <tr>
            <td class="con" colspan="2" style="height:35px;">&nbsp;&nbsp;{$entity->getObservaciones()}</td>
        </tr>
    </tbody>
</table>
EOD;
    return $html;
    }
}
