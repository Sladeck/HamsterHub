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
        $__internal_449bd75b9d41ffc0e7df8648c6c421ead75ad52b39a3a3d1c5a8c7bae3e7622c = $this->env->getExtension("native_profiler");
        $__internal_449bd75b9d41ffc0e7df8648c6c421ead75ad52b39a3a3d1c5a8c7bae3e7622c->enter($__internal_449bd75b9d41ffc0e7df8648c6c421ead75ad52b39a3a3d1c5a8c7bae3e7622c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_449bd75b9d41ffc0e7df8648c6c421ead75ad52b39a3a3d1c5a8c7bae3e7622c->leave($__internal_449bd75b9d41ffc0e7df8648c6c421ead75ad52b39a3a3d1c5a8c7bae3e7622c_prof);

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
