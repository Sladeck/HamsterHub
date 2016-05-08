<?php

/* ::base.html.twig */
class __TwigTemplate_aa1e59682b9fb76fbcd72d1f5e94ae699409e0fda1be741336aa7c1355572e94 extends Twig_Template
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
        $__internal_7699cdb508aa3d64507ef1f3d62985d0663114a0688e2740d6cc406af8101d30 = $this->env->getExtension("native_profiler");
        $__internal_7699cdb508aa3d64507ef1f3d62985d0663114a0688e2740d6cc406af8101d30->enter($__internal_7699cdb508aa3d64507ef1f3d62985d0663114a0688e2740d6cc406af8101d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7699cdb508aa3d64507ef1f3d62985d0663114a0688e2740d6cc406af8101d30->leave($__internal_7699cdb508aa3d64507ef1f3d62985d0663114a0688e2740d6cc406af8101d30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01ff6fb4d1456d0e3a463f994504cbcaec9deca7ce1986e0e97ff5d98ac11fb2 = $this->env->getExtension("native_profiler");
        $__internal_01ff6fb4d1456d0e3a463f994504cbcaec9deca7ce1986e0e97ff5d98ac11fb2->enter($__internal_01ff6fb4d1456d0e3a463f994504cbcaec9deca7ce1986e0e97ff5d98ac11fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_01ff6fb4d1456d0e3a463f994504cbcaec9deca7ce1986e0e97ff5d98ac11fb2->leave($__internal_01ff6fb4d1456d0e3a463f994504cbcaec9deca7ce1986e0e97ff5d98ac11fb2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07a8ca05e918fad5ad4aca5bf79a37de265d76dfc12e627aa650adab3a1ce76d = $this->env->getExtension("native_profiler");
        $__internal_07a8ca05e918fad5ad4aca5bf79a37de265d76dfc12e627aa650adab3a1ce76d->enter($__internal_07a8ca05e918fad5ad4aca5bf79a37de265d76dfc12e627aa650adab3a1ce76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07a8ca05e918fad5ad4aca5bf79a37de265d76dfc12e627aa650adab3a1ce76d->leave($__internal_07a8ca05e918fad5ad4aca5bf79a37de265d76dfc12e627aa650adab3a1ce76d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e75bfecb02e250bcbec2c2254acf40c4f6ce0a6e6fc128a8c55b2e3cc8d4108c = $this->env->getExtension("native_profiler");
        $__internal_e75bfecb02e250bcbec2c2254acf40c4f6ce0a6e6fc128a8c55b2e3cc8d4108c->enter($__internal_e75bfecb02e250bcbec2c2254acf40c4f6ce0a6e6fc128a8c55b2e3cc8d4108c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e75bfecb02e250bcbec2c2254acf40c4f6ce0a6e6fc128a8c55b2e3cc8d4108c->leave($__internal_e75bfecb02e250bcbec2c2254acf40c4f6ce0a6e6fc128a8c55b2e3cc8d4108c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0ab423bb53447d187e0adb5e74be74d4f22db3d99d4528e8c12cb085846e982 = $this->env->getExtension("native_profiler");
        $__internal_e0ab423bb53447d187e0adb5e74be74d4f22db3d99d4528e8c12cb085846e982->enter($__internal_e0ab423bb53447d187e0adb5e74be74d4f22db3d99d4528e8c12cb085846e982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0ab423bb53447d187e0adb5e74be74d4f22db3d99d4528e8c12cb085846e982->leave($__internal_e0ab423bb53447d187e0adb5e74be74d4f22db3d99d4528e8c12cb085846e982_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
