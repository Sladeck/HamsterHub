<?php

/* HamsterHubBundle:Base:menu.html.twig */
class __TwigTemplate_6a1a1d63b802ca2bb50f6497a90be5b312d32070359b2de285c5a2b1b674c1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Connexion' => array($this, 'block_Connexion'),
            'Inscription' => array($this, 'block_Inscription'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcfbeb0c8e5dc246e69b3b454a4d1a9322335252d326e76d95131ea5f3dfed8a = $this->env->getExtension("native_profiler");
        $__internal_fcfbeb0c8e5dc246e69b3b454a4d1a9322335252d326e76d95131ea5f3dfed8a->enter($__internal_fcfbeb0c8e5dc246e69b3b454a4d1a9322335252d326e76d95131ea5f3dfed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:menu.html.twig"));

        // line 1
        echo "<nav id='cssmenu'>
    <ul>
       <li class='active'><a href='#'><span>Home</span></a></li>
       ";
        // line 4
        $this->displayBlock('Connexion', $context, $blocks);
        // line 5
        echo "       ";
        $this->displayBlock('Inscription', $context, $blocks);
        // line 6
        echo "       <li class='last'><a href='#'><span>Contact</span></a></li>
    </ul>
</nav>
";
        
        $__internal_fcfbeb0c8e5dc246e69b3b454a4d1a9322335252d326e76d95131ea5f3dfed8a->leave($__internal_fcfbeb0c8e5dc246e69b3b454a4d1a9322335252d326e76d95131ea5f3dfed8a_prof);

    }

    // line 4
    public function block_Connexion($context, array $blocks = array())
    {
        $__internal_e7189039a2543e1aa5fd086141f673ffba8c5157371ab2665554193f6fa92cb6 = $this->env->getExtension("native_profiler");
        $__internal_e7189039a2543e1aa5fd086141f673ffba8c5157371ab2665554193f6fa92cb6->enter($__internal_e7189039a2543e1aa5fd086141f673ffba8c5157371ab2665554193f6fa92cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Connexion"));

        echo "<li><a href='#'><span>Connexion</span></a></li>";
        
        $__internal_e7189039a2543e1aa5fd086141f673ffba8c5157371ab2665554193f6fa92cb6->leave($__internal_e7189039a2543e1aa5fd086141f673ffba8c5157371ab2665554193f6fa92cb6_prof);

    }

    // line 5
    public function block_Inscription($context, array $blocks = array())
    {
        $__internal_164c1be6145524cc038e002510a1796a86792fb37a4ab84c26fbd3c4896eb756 = $this->env->getExtension("native_profiler");
        $__internal_164c1be6145524cc038e002510a1796a86792fb37a4ab84c26fbd3c4896eb756->enter($__internal_164c1be6145524cc038e002510a1796a86792fb37a4ab84c26fbd3c4896eb756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Inscription"));

        echo "<li><a href='#'><span>Inscription</span></a></li>";
        
        $__internal_164c1be6145524cc038e002510a1796a86792fb37a4ab84c26fbd3c4896eb756->leave($__internal_164c1be6145524cc038e002510a1796a86792fb37a4ab84c26fbd3c4896eb756_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  44 => 4,  34 => 6,  31 => 5,  29 => 4,  24 => 1,);
    }
}
/* <nav id='cssmenu'>*/
/*     <ul>*/
/*        <li class='active'><a href='#'><span>Home</span></a></li>*/
/*        {% block Connexion %}<li><a href='#'><span>Connexion</span></a></li>{% endblock %}*/
/*        {% block Inscription %}<li><a href='#'><span>Inscription</span></a></li>{% endblock %}*/
/*        <li class='last'><a href='#'><span>Contact</span></a></li>*/
/*     </ul>*/
/* </nav>*/
/* */
