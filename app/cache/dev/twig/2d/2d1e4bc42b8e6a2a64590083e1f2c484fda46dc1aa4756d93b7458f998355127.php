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
        $__internal_c93ece53d713e35f35532c6f411f03848ee6c65c062dd55449bf566183fea29c = $this->env->getExtension("native_profiler");
        $__internal_c93ece53d713e35f35532c6f411f03848ee6c65c062dd55449bf566183fea29c->enter($__internal_c93ece53d713e35f35532c6f411f03848ee6c65c062dd55449bf566183fea29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c93ece53d713e35f35532c6f411f03848ee6c65c062dd55449bf566183fea29c->leave($__internal_c93ece53d713e35f35532c6f411f03848ee6c65c062dd55449bf566183fea29c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b688e8f47204a06785136d7e7de89d75050069c6cad25bb3a51b31112da6c52 = $this->env->getExtension("native_profiler");
        $__internal_9b688e8f47204a06785136d7e7de89d75050069c6cad25bb3a51b31112da6c52->enter($__internal_9b688e8f47204a06785136d7e7de89d75050069c6cad25bb3a51b31112da6c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b688e8f47204a06785136d7e7de89d75050069c6cad25bb3a51b31112da6c52->leave($__internal_9b688e8f47204a06785136d7e7de89d75050069c6cad25bb3a51b31112da6c52_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7e35949318dfcc6a69640792eeed0ad85f55de8a918d224325af4834aefeeba = $this->env->getExtension("native_profiler");
        $__internal_c7e35949318dfcc6a69640792eeed0ad85f55de8a918d224325af4834aefeeba->enter($__internal_c7e35949318dfcc6a69640792eeed0ad85f55de8a918d224325af4834aefeeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7e35949318dfcc6a69640792eeed0ad85f55de8a918d224325af4834aefeeba->leave($__internal_c7e35949318dfcc6a69640792eeed0ad85f55de8a918d224325af4834aefeeba_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e9232c62f01163e152e10675275b8458cd3d9f1819e0c7291e8d739c09e4ec6 = $this->env->getExtension("native_profiler");
        $__internal_3e9232c62f01163e152e10675275b8458cd3d9f1819e0c7291e8d739c09e4ec6->enter($__internal_3e9232c62f01163e152e10675275b8458cd3d9f1819e0c7291e8d739c09e4ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e9232c62f01163e152e10675275b8458cd3d9f1819e0c7291e8d739c09e4ec6->leave($__internal_3e9232c62f01163e152e10675275b8458cd3d9f1819e0c7291e8d739c09e4ec6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_597450c39001d12b04a3166fc79fc839cc6a065bfe21f02d78e2df8be956cbfb = $this->env->getExtension("native_profiler");
        $__internal_597450c39001d12b04a3166fc79fc839cc6a065bfe21f02d78e2df8be956cbfb->enter($__internal_597450c39001d12b04a3166fc79fc839cc6a065bfe21f02d78e2df8be956cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_597450c39001d12b04a3166fc79fc839cc6a065bfe21f02d78e2df8be956cbfb->leave($__internal_597450c39001d12b04a3166fc79fc839cc6a065bfe21f02d78e2df8be956cbfb_prof);

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
