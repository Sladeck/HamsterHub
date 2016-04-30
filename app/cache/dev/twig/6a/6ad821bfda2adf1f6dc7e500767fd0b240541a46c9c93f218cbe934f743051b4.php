<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ea81dceff93b2e222bb6070daa9ec43357b8af086afbf452114723fac342bf27 extends Twig_Template
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
        $__internal_98be75e58ff499b302f19097c15a251a1155dcc216cfd58db9927f56edc37d71 = $this->env->getExtension("native_profiler");
        $__internal_98be75e58ff499b302f19097c15a251a1155dcc216cfd58db9927f56edc37d71->enter($__internal_98be75e58ff499b302f19097c15a251a1155dcc216cfd58db9927f56edc37d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_98be75e58ff499b302f19097c15a251a1155dcc216cfd58db9927f56edc37d71->leave($__internal_98be75e58ff499b302f19097c15a251a1155dcc216cfd58db9927f56edc37d71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
