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
        $__internal_177d86aa28d9904c352d24a13f51d917535d5aa863b8fce4fe0778ad606ed6a9 = $this->env->getExtension("native_profiler");
        $__internal_177d86aa28d9904c352d24a13f51d917535d5aa863b8fce4fe0778ad606ed6a9->enter($__internal_177d86aa28d9904c352d24a13f51d917535d5aa863b8fce4fe0778ad606ed6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_177d86aa28d9904c352d24a13f51d917535d5aa863b8fce4fe0778ad606ed6a9->leave($__internal_177d86aa28d9904c352d24a13f51d917535d5aa863b8fce4fe0778ad606ed6a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7402ce1120deb70def5d00ace17722b46d285da940ceeb6abaa74ab0f2c81e8 = $this->env->getExtension("native_profiler");
        $__internal_a7402ce1120deb70def5d00ace17722b46d285da940ceeb6abaa74ab0f2c81e8->enter($__internal_a7402ce1120deb70def5d00ace17722b46d285da940ceeb6abaa74ab0f2c81e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a7402ce1120deb70def5d00ace17722b46d285da940ceeb6abaa74ab0f2c81e8->leave($__internal_a7402ce1120deb70def5d00ace17722b46d285da940ceeb6abaa74ab0f2c81e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee99cf70968c860962ccfebca578b495c8b54c8dec856af82d8446b97fc47213 = $this->env->getExtension("native_profiler");
        $__internal_ee99cf70968c860962ccfebca578b495c8b54c8dec856af82d8446b97fc47213->enter($__internal_ee99cf70968c860962ccfebca578b495c8b54c8dec856af82d8446b97fc47213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee99cf70968c860962ccfebca578b495c8b54c8dec856af82d8446b97fc47213->leave($__internal_ee99cf70968c860962ccfebca578b495c8b54c8dec856af82d8446b97fc47213_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_93010b594f3efcec9afae99f0eed66552757370c0df772b3de43df81508bd730 = $this->env->getExtension("native_profiler");
        $__internal_93010b594f3efcec9afae99f0eed66552757370c0df772b3de43df81508bd730->enter($__internal_93010b594f3efcec9afae99f0eed66552757370c0df772b3de43df81508bd730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93010b594f3efcec9afae99f0eed66552757370c0df772b3de43df81508bd730->leave($__internal_93010b594f3efcec9afae99f0eed66552757370c0df772b3de43df81508bd730_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a19c7896cf35cfb806e5af0f040396c077a8094956ef03ac6905cc5aecdb432 = $this->env->getExtension("native_profiler");
        $__internal_7a19c7896cf35cfb806e5af0f040396c077a8094956ef03ac6905cc5aecdb432->enter($__internal_7a19c7896cf35cfb806e5af0f040396c077a8094956ef03ac6905cc5aecdb432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a19c7896cf35cfb806e5af0f040396c077a8094956ef03ac6905cc5aecdb432->leave($__internal_7a19c7896cf35cfb806e5af0f040396c077a8094956ef03ac6905cc5aecdb432_prof);

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
