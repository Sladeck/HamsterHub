<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a1c59dfebc6c7723ba5819a32778b1befb4df791f7ab2c4ea1ff5ae419f71fa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38dad53c57e8d7281ca3ff4ab0b6f2da75b05d252b490b552f135ea18b673f50 = $this->env->getExtension("native_profiler");
        $__internal_38dad53c57e8d7281ca3ff4ab0b6f2da75b05d252b490b552f135ea18b673f50->enter($__internal_38dad53c57e8d7281ca3ff4ab0b6f2da75b05d252b490b552f135ea18b673f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_38dad53c57e8d7281ca3ff4ab0b6f2da75b05d252b490b552f135ea18b673f50->leave($__internal_38dad53c57e8d7281ca3ff4ab0b6f2da75b05d252b490b552f135ea18b673f50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
