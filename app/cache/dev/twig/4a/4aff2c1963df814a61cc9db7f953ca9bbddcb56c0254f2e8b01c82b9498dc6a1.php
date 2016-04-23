<?php

/* base.html.twig */
class __TwigTemplate_270f789a4fcb6e6ef85363d13d7f79c9b40761cf316aa39576dac5fb714e4250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01bf555bfff9b35d66e3d1328983d6f4f5e74e91aa60b9531f391d4086203506 = $this->env->getExtension("native_profiler");
        $__internal_01bf555bfff9b35d66e3d1328983d6f4f5e74e91aa60b9531f391d4086203506->enter($__internal_01bf555bfff9b35d66e3d1328983d6f4f5e74e91aa60b9531f391d4086203506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_01bf555bfff9b35d66e3d1328983d6f4f5e74e91aa60b9531f391d4086203506->leave($__internal_01bf555bfff9b35d66e3d1328983d6f4f5e74e91aa60b9531f391d4086203506_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f54565d128bf1e8c0876d854cd016aaa04428eac540c8d5fb56f28c0a3aa7a50 = $this->env->getExtension("native_profiler");
        $__internal_f54565d128bf1e8c0876d854cd016aaa04428eac540c8d5fb56f28c0a3aa7a50->enter($__internal_f54565d128bf1e8c0876d854cd016aaa04428eac540c8d5fb56f28c0a3aa7a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f54565d128bf1e8c0876d854cd016aaa04428eac540c8d5fb56f28c0a3aa7a50->leave($__internal_f54565d128bf1e8c0876d854cd016aaa04428eac540c8d5fb56f28c0a3aa7a50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f64dabbe98c34e0220e31fbe3c81dd6e738762d64170d2d817c89730ce4b68ef = $this->env->getExtension("native_profiler");
        $__internal_f64dabbe98c34e0220e31fbe3c81dd6e738762d64170d2d817c89730ce4b68ef->enter($__internal_f64dabbe98c34e0220e31fbe3c81dd6e738762d64170d2d817c89730ce4b68ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f64dabbe98c34e0220e31fbe3c81dd6e738762d64170d2d817c89730ce4b68ef->leave($__internal_f64dabbe98c34e0220e31fbe3c81dd6e738762d64170d2d817c89730ce4b68ef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_345de35a0cc3c2ee657eb403b32a1f6d7df6deb8d131b32c530ef57b65aa2aa6 = $this->env->getExtension("native_profiler");
        $__internal_345de35a0cc3c2ee657eb403b32a1f6d7df6deb8d131b32c530ef57b65aa2aa6->enter($__internal_345de35a0cc3c2ee657eb403b32a1f6d7df6deb8d131b32c530ef57b65aa2aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_345de35a0cc3c2ee657eb403b32a1f6d7df6deb8d131b32c530ef57b65aa2aa6->leave($__internal_345de35a0cc3c2ee657eb403b32a1f6d7df6deb8d131b32c530ef57b65aa2aa6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44e7c4a62128e0af7e7e323af3cf24d21ea29cb1aa61a86d208a6ac03748718d = $this->env->getExtension("native_profiler");
        $__internal_44e7c4a62128e0af7e7e323af3cf24d21ea29cb1aa61a86d208a6ac03748718d->enter($__internal_44e7c4a62128e0af7e7e323af3cf24d21ea29cb1aa61a86d208a6ac03748718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44e7c4a62128e0af7e7e323af3cf24d21ea29cb1aa61a86d208a6ac03748718d->leave($__internal_44e7c4a62128e0af7e7e323af3cf24d21ea29cb1aa61a86d208a6ac03748718d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
