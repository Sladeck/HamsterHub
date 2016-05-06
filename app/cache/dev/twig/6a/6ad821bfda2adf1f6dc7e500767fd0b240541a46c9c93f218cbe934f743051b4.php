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
        $__internal_8e57f4213e176f3a1d3e6c25a634ce2ebc0d0b5d7977d8d250c66352c7d6256f = $this->env->getExtension("native_profiler");
        $__internal_8e57f4213e176f3a1d3e6c25a634ce2ebc0d0b5d7977d8d250c66352c7d6256f->enter($__internal_8e57f4213e176f3a1d3e6c25a634ce2ebc0d0b5d7977d8d250c66352c7d6256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8e57f4213e176f3a1d3e6c25a634ce2ebc0d0b5d7977d8d250c66352c7d6256f->leave($__internal_8e57f4213e176f3a1d3e6c25a634ce2ebc0d0b5d7977d8d250c66352c7d6256f_prof);

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
