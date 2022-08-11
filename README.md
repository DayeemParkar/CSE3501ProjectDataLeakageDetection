# Data Leakage Detection Using a Probability Based Approach
## Methodology
The model developed is used for calculating the probability of an agent being a leaker. For distributing objects to the agents, a key based approach is used where the agent has to request the key access to the admin. Records of this are maintained to enhance the chances of identifying the leaker of the data. If we encounter a data set that is leaked, we calculate the probability of each agent leaking the set.
<br>Let us consider that a leaked data set is S = {t1, t2, t3}
<br>Let two agents U1 and U2 have access to the sets:
<br>U1 = {t1, t2}
<br>U2 = {t1, t3}

<br><br>For each file leaked, we consider a predefined probability p that the file key was guessed. So the probability that it was leaked by any one of the agents is 1-p.
<br>For t1, both U1 and U2 have access to it. So probability that U1 leaked it is (1-p)/2. So, the probability that U1 didn’t leak t1 is 1-[(1-p)/2].
<br>For t2, only U1 can leak it. So probability = 1-p. So, the probability that U1 didn’t leak t2 is 1-(1-p).
<br>For t3, probability that U1 didn’t leak t3 is 1.
<br><br>The probability that U1 didn’t leak either of them:
<br>P = [1 – (1-p)/2] x [1 – (1-p)] x 1
<br>This determines the probability of U1 being a leaker as 1 – P.

<br><br>In general for an agent the probability that they didn’t leak either of them:
<br>P = [1 – (1-p)/N1] x [1 – (1-p)/N2] x .... x [1 – (1-p)/Ni]
<br>Where,
<br>i: Number of leaked files the current agent has accessed
<br>Ni: Number of agents that have access to the file i
